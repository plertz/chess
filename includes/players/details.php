<?php
    $db = new PDO("sqlite:../database/chess");
    $sql = "SELECT user_id FROM users WHERE username = '$user'";
    $result = $db->query($sql);
    $user_id = null;
    foreach ($result as $row) {
        $user_id = $row['user_id'];
    }
    if($user_id == null){
        header("location: ../error.php");
    }
    
    $sql = "SELECT online_matches, online_wins, local_matches, local_wins, bot_matches, bot_wins FROM user_stats WHERE user_id = $user_id";
    $result = $db->query($sql);
    foreach ($result as $row) {
        $online_matches = $row['online_matches'];
        $online_wins = $row['online_wins'];
        $local_matches = $row['local_matches'];
        $local_wins = $row['local_wins'];
        $bot_matches = $row['bot_matches'];
        $bot_wins = $row['bot_wins'];
    }
    $sql = "SELECT icon FROM icon WHERE user_id = $user_id";
    $result = $db->query($sql);
    foreach ($result as $row) {
        $icon = $row['icon'];
    }
    $db = null;
?>