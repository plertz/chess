<?php
if(isset($_GET["search"])){
    $search = $_GET["search"];
}
else{
    $search = "online_wins";
}

if (isset($_GET["sort"])){
    $sort = $_GET["sort"];
}
else{
    $sort = "DESC";
}


if($search != "online_wins" && $search != "online_matches"){
    $search = "online_wins";
}

if($sort != "ASC" && $sort != "DESC"){
    $sort = "DESC";
}

$db = new PDO("sqlite:../database/chess");
$sql = "SELECT $search, username FROM user_stats JOIN users ON user_stats.user_id = users.user_id ORDER BY $search $sort LIMIT 1500";
$result = $db->query($sql);
$db = null;
foreach($result as $row)
    echo "<tr><td>".$row[$search]."</td><td><a href='../players/details.php?player=".$row["username"]."'>".$row["username"]."</a></td></tr>";
?>