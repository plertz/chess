<?php
function sqlProof($input){
    $forbidden_char = ["'", '"', "SELECT", "FROM", "WHERE", "AND", "OR", "LIKE"];
    for ($i=0; $i < count($forbidden_char); $i++) { 
        if(strpos($input, $forbidden_char[$i]) !== false){
            return false;
        }
    }
    return true;
}
?>