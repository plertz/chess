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

$username = $_SESSION['username'];
$session = $_SESSION['session_id'];
class game {
    public $username;
    public $opponent;
    public $player_1;
    public $player_2;
    public $current_turn = 0;
    public $turn_counter = 0;
    public $log = [];

    function __construct($username){
        $this->username = $username;
    }
}

start_search($username, $session);

while (true) {
    //functions here
    
    echo "data: " . json_encode($username) . "\n\n";
    sleep(1);

    ob_end_flush();
    flush();

    if (connection_aborted()) {
        break;
    }
}
?>