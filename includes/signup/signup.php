<?php 
include "add_user.php";
if (isset($_POST['username']) &&
    isset($_POST['password']) &&
    isset($_POST['confirm'])) {
    addUser( 
        $_POST['username'], 
        $_POST['password'], 
        $_POST['confirm']);
}
?>
