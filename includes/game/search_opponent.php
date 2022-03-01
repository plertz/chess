<?php 
include "search.php";
include "../../../includes/auth.php";
$loggedIn = auth("../../../");
if (!$loggedIn) {
    header("Location: login.php");
}
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
    foreach(glob('*.json') as $file) {
        $counter++;
    }
    $file_num = $counter+=1;
    $file_num = strval($file_num);
    $file_num = $file_num . ".json";
    $file = fopen($file_num, "w");
    fwrite($file, $data);
    fclose($file);
}

// $set = check_set($username);

// if (!$set) {
//     Wait_list($username, $session); //avoid double search_id
// }

// $search_id = get_id($username);

// while (true) {
//     $opponent = search_player($search_id);
//     if($opponent != null){
//         break;
//     }
// }
// echo $opponent;



?>