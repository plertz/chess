<?php 
include "search.php";
echo "hello";
include "../../../includes/auth.php";
$loggedIn = auth("../../../");
if (!$loggedIn) {
    header("Location: login.php");
}
$username = $_SESSION['username'];
$session = $_SESSION['session_id'];

$set = check_set($username);

if (!$set) {
    Wait_list($username, $session); //avoid double search_id
}

$search_id = get_id($username);

while (true) {
    $opponent = search_player($search_id);
    if($opponent != null){
        break;
    }
}
echo $opponent;
?>