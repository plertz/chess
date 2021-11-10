<?php 
function set_session($username){
    $user_id = get_user_id($username);
    $session_token = create_session_token($user_id);
    set_token($username, $session_token);

}

function get_user_id($username){
    $db = new PDO("sqlite:../../database/chess");
    $sql = "SELECT user_id FROM users WHERE username = '$username'";
    $result = $db->query($sql);
    foreach ($result as $row) {
        return $row['user_id'];
    }
}

function create_session_token($userId){
    return rand(10000000, 999999999);
}

function set_token($username, $session_token){
    session_start();
    $db = new PDO("sqlite:../../database/chess");
    $sql = "UPDATE users SET token_id = '$session_token' WHERE username = '$username'";
    $db->exec($sql);
    $db = null;
    $_SESSION["username"] = $username;
    $_SESSION["session_id"] = $session_token;
}
?>