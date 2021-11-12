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
    $search_id = Wait_list($username, $session);
    echo "Search: " . $search_id;
}
?>