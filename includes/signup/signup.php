<?php 
include "add_user.php";
if (isset($_POST['naam']) && 
    isset($_POST['tussenvoegsel']) && 
    isset($_POST['tussenvoegsel']) && 
    isset($_POST['achternaam']) && 
    isset($_POST['username']) &&
    isset($_POST['birthyear']) &&
    isset($_POST['email']) &&
    isset($_POST['phone']) &&
    isset($_POST['password']) &&
    isset($_POST['confirm'])) {
    addUser($_POST['naam'], 
        $_POST['tussenvoegsel'], 
        $_POST['achternaam'], 
        $_POST['username'], 
        $_POST['birthyear'], 
        $_POST['email'], 
        $_POST['phone'], 
        $_POST['password'], 
        $_POST['confirm']);
}
?>
