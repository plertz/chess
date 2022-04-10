<?php
header("Cache-Control: no-cache");
header("Content-Type: text/event-stream");
include "../general/auth.php";
include "connect.php";
include "start_search.php";

$loggedIn = auth("../../");
if (!$loggedIN) {
    header("Location ../../"); 
}

$username = $_SESSION['username'];
$session = $_SESSION['session_id'];
class game {
    public $username;
    public $opponent = null;
    public $player_1;
    public $player_2;
    public $current_turn = 0;
    public $turn_counter = 0;
    public $log = [];
    public $board;

    function __construct($username){
        $this->username = $username;
        // $this->board = create_board();
    }
}

$Game = new game($username);

$current_num = start_search($username, $session);

while (true) {
    //functions here
    if ($Game->opponent == null) {
        $Game->opponent = search_player($current_num);
    }
    echo "data: " . json_encode($game->opponent) . "\n\n";
    sleep(1);

    ob_end_flush();
    flush();

    if (connection_aborted()) {
        break;
    }
}
?>