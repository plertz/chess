<?php 
include "search.php";
include "../../../includes/auth.php";
$loggedIn = auth("../../../");
if (!$loggedIn) {
    header("Location: ../../../auth/login.php");
}
$username = $_SESSION['username'];
$session = $_SESSION['session_id'];

$set = check_set($username);

if (!$set) {
    Wait_list($username, $session); 
}

$search_id = get_id($username);

while (true) {
    $opponent = search_player($username, $search_id);
    if($opponent != null){
        break;
    }
    sleep(1);
}
echo $opponent;
?>