<?php
function Wait_list($username, $session_id){
    $db = new PDO("sqlite:../../../database/chess");
    $sql = "INSERT INTO search (username, session_id) VALUES ('$username', '$session_id')";
    $db->exec($sql);
    $sql = "SELECT search_id FROM search";
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
    $db = new PDO("sqlite:../../../database/chess");
    $sql = "SELECT username, search_id from search WHERE CASE  ";
}
?>