<?php
    function search_player($this_pnum){
        $ohter_pnum = null;
        
        if($this_pnum % 2 == 0){
            $other_pnum = $this_pnum - 1;
        }
        else{
            $other_pnum = $this_pnum + 1;
        }
        $ohter_pnum = strval($ohter_pnum);
        $file_path = "../../database/active_players/" . $other_pnum . ".json";
        echo $file_path;
        try{
            $file = fopen($file_path, "r");
            if($file){
                $data = fgets($file);
                fclose($file); 
                $data = json_decode($data); 
                return $data->username;
            }          
        }
        catch(Exception $e){
        } 
        return null;
    }
?>
