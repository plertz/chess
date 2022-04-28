<?php
    //anti sql-injection
    function sqlProof($input){
        $forbidden_char = ["'", '"', "SELECT", "FROM", "WHERE", "AND", "OR", "LIKE"];
        for ($i=0; $i < count($forbidden_char); $i++) { 
            if(strpos($input, $forbidden_char[$i]) !== false){
                return false;
            }
        }
        return true;
    }

    function check_user($input){
        if(sqlProof($input)){
            $db = new PDO('sqlite:../../database/chess');
            $sql = "SELECT username FROM users WHERE username = '$input'";
            $result = $db->query($sql);
            foreach ($result as $row) {
               if ($row["username"] == $input) {
                   return false;
                }
            }
            $db = null;
            return true;
        }
    }

    function check($input){
        if(sqlProof($input)){
            return true;
        }
        return false;
    }

    function hash_pass($input){
        $input = sha1($input);
        return $input;
    }
?>