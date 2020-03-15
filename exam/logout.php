<?php
session_start();

session_destroy();
header("Location:Login_v9/Login_v9/login.php");

?>