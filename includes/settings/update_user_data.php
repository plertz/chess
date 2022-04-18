<?php
    $user_id = $_SESSION["user_id"];
    $db = new PDO("sqlite:../database/chess");
    $sql = "UPDATE user_info SET email = '$email', gender_id = $gender WHERE user_id = $user_id";
    $db->exec($sql);
    $db = null;
?>