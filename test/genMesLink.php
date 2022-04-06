<?php 

require "MessageService.php";

    if (isset($_POST['encryptText'])) {
        $messageText = $_POST['encryptText'];
        $messageService = new MessageService();

        $messageService->saveMessage($messageText);
    }
    else {
        echo "Please enter a message";
    }

?>