<?php
$input = $_GET["search_query"];
function sqlProof($input){
    $forbidden_char = ["'", '"', "SELECT", "FROM", "WHERE", "AND", "OR", "LIKE"];
    for ($i=0; $i < count($forbidden_char); $i++) { 
        if(strpos($input, $forbidden_char[$i]) !== false){
            return false;
        }
    }
    return true;
}
if(sqlProof($input)){
    $db = new PDO('sqlite:../../database/chess');
    $sql = "SELECT username FROM users WHERE username like '$input%' LIMIT 30";
    $result = $db->query($sql);
    $data = [];
    foreach ($result as $row) {
        array_push($data, $row['username']);
    }
    $db = null;
}
else{
    $data = [];
}
$data = json_encode($data);
echo $data;
?>