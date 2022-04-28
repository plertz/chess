<?php 
function auth($path){
    session_start();
    if (isset($_SESSION["user_id"]) && $_SESSION["session_id"]) {
        $user_id = $_SESSION["user_id"];
        $session_id = $_SESSION["session_id"];
        $db = new PDO("sqlite:${path}database/chess");
        $sql = "SELECT user_id, token FROM active_players WHERE user_id = '$user_id'";
        $result = $db->query($sql);
        foreach ($result as $row) {
            if ($row["token"] == $session_id) {
                return true;
            }
        }
    }
    return false;
}

?>