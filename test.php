<?php 
include "includes/auth.php";
$loggedIn =auth("");
if (!$loggedIn) {
    // header("Location: auth/login.php");
    // header("Location: auth/login.php");
}
echo "logged In";
 