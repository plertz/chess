<?php
//usless
include "../general/auth.php";
include "connect.php";
session_start();
$loggedIn = auth("../../");
if (!$loggedIN) {
    header("Location ../../"); 
}
$username = $_SESSION["username"];
unset_active($username);
?>