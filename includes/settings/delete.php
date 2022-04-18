<?php
    session_start();
    $user_id = $_SESSION["user_id"];
    $db = new PDO("sqlite:../../database/chess");
    $sql = "DELETE FROM users WHERE user_id = $user_id;
            DELETE FROM user_stats WHERE user_id = $user_id;
            DELETE FROM active_players WHERE user_id = $user_id;
            DELETE FROM icon WHERE user_id = $user_id;
            DELETE FROM user_info WHERE user_id = $user_id;";
    $db->exec($sql);
    $db = null;
    header("Location: ../../");
?>