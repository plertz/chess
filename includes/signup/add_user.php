<?php
include "validation.php";
function addUser($naam, $tusvg, $lastName, $user, $birth, $email, $phone, $pass, $conf){
    if ($pass == $conf && check_user($user) && check_name($naam) && check_name($tusvg) && check_name($lastName) && check($phone) && check($birth) && check($email)) {
        $hashed = hash_pass($pass);
        $lastName = $tusvg . " " . $lastName;
        $db = new PDO('sqlite:../../database/chess');
        $sql = "INSERT INTO users (first_name, last_name, username, birth_year, email, phone_number) VALUES ('$naam', '$lastName', '$user', '$birth', '$email', '$phone')";
        $db->exec($sql);
        
        $sql = "INSERT INTO passwords ('username', 'password') VALUES ('$user', '$hashed')";
        $db->exec($sql);
        $db = null;
        header("location: ../../auth/login/");
    }
    else {
        header("location: ../../auth/signup/");
    }
}
?>