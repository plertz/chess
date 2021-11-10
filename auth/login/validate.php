<?php
function validate_password($username, $password){
    if (sqlProof($username)) {
        $password = sha1($password);

        $db = new PDO("sqlite:../../database/chess");
        $sql = "SELECT username, password FROM passwords WHERE username = '$username'";
        $result = $db->query($sql);
        $db = null;
        foreach ($result as $row) {
            if ($row['username'] == $username && $row['password'] == $password) {
                return true;
            }
        }
        return false;
    }
    else {
        return false;
    }

}

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