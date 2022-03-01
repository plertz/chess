<?php
$username = "jemoeder";
$session = 123454678;

class Queue_data{
    public $username;
    public $session;
    function __construct($username, $session) {
        $this->username = $username; 
        $this->session = $session;
      }
}

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
?>