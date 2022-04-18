<?php
include "validation.php";

function addUser($user, $pass, $conf){
    if ($pass == $conf && check_user($user)) {
        $hashed = hash_pass($pass);
        $user = strtolower($user);
        $db = new PDO('sqlite:../../database/chess');
        $sql = "INSERT INTO users (username, password) VALUES ('$user', '$hashed')";
        $db->exec($sql);
        
        $sql = "SELECT user_id FROM users WHERE username = '$user'";
        $result = $db->query($sql);
        foreach ($result as $row) {
            $user_id = $row['user_id'];
        }
        $sql = "INSERT INTO icon (user_id) VALUES ('$user_id')";
        $db->exec($sql);
        $sql = "INSERT INTO active_players (user_id) VALUES ('$user_id')";
        $db->exec($sql);
        $sql = "INSERT INTO user_info (user_id) VALUES ('$user_id')";
        $db->exec($sql);
        $sql = "INSERT INTO player_stats (user_id) VALUES ('$user_id')";
        $db->exec($sql);
        $db = null;
        header("location: ../../auth/login/");
    }
    else {
        header("location: ../../auth/signup/");

    }
}

?>