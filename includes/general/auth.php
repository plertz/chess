<?php 
function auth($path){
    session_start();
    if (isset($_SESSION["username"]) && $_SESSION["session_id"]) {
        $username = $_SESSION["username"];
        $session_id = $_SESSION["session_id"];
        $db = new PDO("sqlite:${path}database/chess");
        $sql = "SELECT username, token_id FROM users WHERE username = '$username'";
        $result = $db->query($sql);
        foreach ($result as $row) {
            if ($row["token_id"] == $session_id) {
                return true;
            }
        }
    }
    return false;
}

?>