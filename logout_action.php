<?php

     session_start();
     session_destroy();
     session_start();
     $_SESSION['MESSAGE'] = "See you back soon!";
   // can not close session here because I want to pass message_type to message controller
   // session will be closed in message controller
     header("Location: message.php");
?>
