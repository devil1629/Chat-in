<?php

session_start();
session_unset(); 
session_destroy();
header("Location:http://localhost:81/chat-in/Index.php");

?>