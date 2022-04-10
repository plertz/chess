<?php 
// include "search.php";
// include "../general/auth.php";
// $loggedIn = auth("../../");
// if (!$loggedIn) {
//     header("Location: ../login/");
// }
class Queue_data{
    public $username;
    public $session;
    function __construct($username, $session) {
        $this->username = $username; 
        $this->session = $session;
    }
}

function start_search($username, $session) {
    $queue_data = new Queue_data($username, $session);
    $data = json_encode($queue_data);
    $counter = 0;
    foreach(glob('../../database/search_players/*.json') as $file) {
        $counter++;
    }
    $file_num = $counter+=1;
    $return_value = $file_num;
    $file_num = strval($file_num);
    $file_num = $file_num . ".json";
    $file_num = "../../database/search_players/". $file_num;
    $file = fopen($file_num, "w");
    fwrite($file, $data);
    fclose($file);
    return $return_value;
}
?>