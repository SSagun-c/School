<?php
require "MessageService.php";




if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $messageService = new MessageService();

    $messageService->readMessage($id);
    
}

?>