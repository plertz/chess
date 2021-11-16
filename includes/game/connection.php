<?php
header("Cache-Control: no-cache");
header("Content-Type: text/event-stream");
include "../general/auth.php";
include "connect.php";

$loggedIn = auth("../../");
if (!$loggedIN) {
    header("Location ../../"); 
}

$username = $_SESSION["username"];
if (!check_set($username)) {
    set_active($username);
}

while (true) {
    //functions here
    
    echo "data: " . json_encode($username) . "\n\n";
    sleep(1);

    ob_end_flush();
    flush();

    if (connection_aborted()) {
        unset_active($username);
        break;
    }
}
?>