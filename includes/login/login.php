<?php
include "validate.php";
include "set_session.php";

if (isset($_POST['password']) && isset($_POST['uname'])) {
    if(validate_password(strtolower($_POST['uname']), $_POST['password'])){
        set_session($_POST['uname']);
        header("Location: ../../");
    }
    else {
        header("Location: ../../auth/login");
        echo "error";
    }
} 
?>