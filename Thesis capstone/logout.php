<?php
// Log- out function
@include 'config.php';

session_start();
session_unset();
session_destroy();

header('location:Loginform.php');

?>