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

    $values = ["online_wins", "online_matches","DESC", "ASC"];
    $innerHTML =["Total online wins", "Total online matches", "Descending", "Ascending"];

    if($search == "online_matches"){
        $temp = $values[0];
        $values[0] = $values[1];
        $values[1] = $temp;
        $temp = $innerHTML[0];
        $innerHTML[0] = $innerHTML[1];
        $innerHTML[1] = $temp;
    }

    if ($sort == "ASC") {
        $temp = $values[2];
        $values[2] = $values[3];
        $values[3] = $temp;
        $temp = $innerHTML[2];
        $innerHTML[2] = $innerHTML[3];
        $innerHTML[3] = $temp;
    }

?>


<tr>
    <td><form action="" method="get">
        <select name="search">
            <option value="<?=$values[0]?>"><?=$innerHTML[0]?></option>
            <option value="<?=$values[1]?>"><?=$innerHTML[1]?></option>
        </select>
        <select name="sort">
            <option value="<?=$values[2]?>"><?=$innerHTML[2]?></option>
            <option value="<?=$values[3]?>"><?=$innerHTML[3]?></option>
        </select>
        <input type="submit" value="View">
    </form></td>
    <td>
    </td>
</tr>