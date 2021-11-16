<?php
function set_active($username){
    $db = new PDO("sqlite:../../database/chess");
    $sql = "INSERT INTO active_players (username) VALUES ('$username')";
    $db->exec($sql);
    $db = null;
}

function check_set($username){
    $db = new PDO("sqlite:../../database/chess");
    $sql = "SELECT username FROM active_players WHERE username = '$username'";
    $result = $db->query($sql);
    foreach ($result as $row){
        if($row['username'] == $username){
            return true;
        }
    } 
    return false;
}

function unset_active($username){
    $db = new PDO("sqlite:../../database/chess");
    $sql = "DELETE FROM active_players WHERE username = '$username'";
    $db->exec($sql);
    $db = null;
}
?>