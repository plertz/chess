<?php
function Wait_list($username, $session_id){
    $db = new PDO("sqlite:../../../database/chess");
    $sql = "INSERT INTO search (username, session_id) VALUES ('$username', '$session_id')";
    $db->exec($sql);
    $db = null;
}

function get_id($username){
    $db = new PDO("sqlite:../../../database/chess");
    $sql = "SELECT search_id FROM search WHERE username = '$username'";
    $result = $db->query($sql);
    $db = null;
    foreach ($result as $row){
        return $row['search_id'];
    } 
}

function check_set($username){
    $db = new PDO("sqlite:../../../database/chess");
    $sql = "SELECT username FROM search WHERE username = '$username'";
    $result = $db->query($sql);
    foreach ($result as $row){
        if($row['username'] == $username){
            return true;
        }
    } 
    return false;
}

function search_player($search_id){
    $a = ($search_id % 2) * 2 - 1;
    $db = new PDO("sqlite:../../../database/chess");
    $sql = "SELECT username, search_id from search WHERE search_id = '$search_id + $a'";
    $result = $db->query($sql);
    foreach ($result as $row) {
        if ($row["user_id"] != NULL) {
            return $row["username"];
        }
        else{
            return false;
        }
    }
}
?>