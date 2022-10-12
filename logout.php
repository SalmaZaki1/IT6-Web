<?php
   
    unset($_SESSION["email"]);
    unset($_SESSION["password"]);
    header("Location:signup.php");
?>