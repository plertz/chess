<?php 
function set_session($username){
    $user_id = get_user_id($username);
    $session_token = create_session_token();
    set_token($user_id, $session_token);

}

function get_user_id($username){
    $db = new PDO("sqlite:../../database/chess");
    $sql = "SELECT user_id FROM users WHERE username = '$username'";
    $result = $db->query($sql);
    foreach ($result as $row) {
        return $row['user_id'];
    }
}

function create_session_token(){
    return rand(10000000, 999999999);
}

function set_token($user_id, $session_token){
    session_start();
    $db = new PDO("sqlite:../../database/chess");
    $sql = "UPDATE active_players SET token = '$session_token' WHERE user_id = '$user_id'";
    // $sql = "INSERT INTO active_players (user_id, token) VALUES ('$user_id', '$session_token')";
    $db->exec($sql);
    $db = null;
    $_SESSION["user_id"] = $user_id;
    $_SESSION["session_id"] = $session_token;
}
?>