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

function search_player($username, $search_id){
    $a = ($search_id % 2) * 2 - 1;
    $search_id += $a;
    $db = new PDO("sqlite:../../../database/chess");
    $sql = "SELECT username, search_id from search WHERE search_id = '$search_id'";
    $result = $db->query($sql);
    foreach ($result as $row) {
        if ($row["search_id"] != NULL) {
            // if ($a == 1) {
            //     create_game($username, $row["username"]);
            // }
            return $row["username"];
        }
        else{
            return false;
        }
    }
}

function create_game($username, $opponent){
    $db = new PDO("sqlite:../../../database/chess");
    $sql = "INSERT INTO active_games (player_1, player_2) VALUES ('$username', '$opponent')";
    $db->exec($sql);
    // $sql = "DELETE FROM search WHERE username = '$username' OR username = '$opponent'";
    $db = null;
}
?>