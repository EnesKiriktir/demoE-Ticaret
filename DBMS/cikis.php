<?php
//oturumu kapat logine git
session_start();
if(session_destroy()){
    header("Location:login.php");
}
?>