<?php

  require "DatabaseConnection.php";
  require "HTMLTemplate.php"; 


    class MessageService { 
        private $connection = NULL;
        private $twig = NULL;

        function __construct() {
            $databaseConnection = new DatabaseConnection();
            $this->connection = $databaseConnection->getConnection();

            $loader = new \Twig\Loader\FilesystemLoader('templates');
            $this->twig = new \Twig\Environment($loader);

        }
        public function deleteMessage($id) {
            try {
                $sql = "DELETE FROM messages WHERE id="."'".$id."'";
        
                // use exec() because no results are returned
                $this->connection->exec($sql);
                return True;
                }
            catch(PDOException $e) {
                return False;
            }
        }

        public function saveMessage($messageText) {
            try {
                $stmt = $this->connection->prepare("INSERT INTO messages (message, id) VALUES (:message, :id)");
                $stmt->bindParam(':message', $message);
                $stmt->bindParam(':id', $id);

                $message = $messageText;
                $id = uniqid();
                $stmt->execute();
                
                $link = "http://localhost/test/readMessage.php?id=".$id;

                echo $this->twig->render('saveMessage.html', ['link' => $link] );
            }
            catch(PDOException $e) {
                echo "Error" . $e->getMessage();
            }
        }

        public function readMessage($id) {
          
          try {
            $stmt = $this->connection->prepare("SELECT id, message FROM messages WHERE id="."'".$id."'");
            $stmt->execute();
            
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $message = "";
            foreach($stmt->fetchAll() as $value) {
              $message = $value["message"];
            }

            $messageIsDeleted = $this->deleteMessage($id); 
            $messageIsDeletedText = "";
            if ($messageIsDeleted) { 
              $messageIsDeletedText = "Your message has been deleted";
            } else {
              $messageIsDeletedText = "Somehow your message was not deleted";
            }
            echo $this->twig->render('readMessage.html', ['message' => $message, 'messageIsDeletedText' => $messageIsDeletedText] );
        }
        catch(PDOException $e) {
            echo "Error" . $e->getMessage();
        }
        
    }
  }