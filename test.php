<?php 
include "includes/auth.php";
$loggedIn =auth("");
if (!$loggedIn) {
    header("Location: auth/login.php");
}
else {
    echo "logged In";
}
