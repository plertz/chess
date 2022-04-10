<?php
    function create_game(){
        $counter = 0;
        foreach(glob('../../database/active_games/*.json') as $file) {
            $counter++;
        }
        $counter = floor($counter / 2);
        $file_num = $counter+=1;
        $file_num = strval($file_num);
        $file_num = $file_num . ".json";
        $file_num = "../../database/active_games/". $file_num;
        $file = fopen($file_num, "w");
        fwrite($file, "");
        fclose($file);
    }

    function search_player($this_pnum){
        $ohter_pnum = null;
        
        if($this_pnum % 2 == 0){
            $other_pnum = $this_pnum - 1;
        }
        else{
            $other_pnum = $this_pnum + 1;
        }
        $ohter_pnum = strval($ohter_pnum);
        $file_path = "../../database/search_players/" . $other_pnum . ".json";
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
