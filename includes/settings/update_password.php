<?php
    if (isset($_POST['old_password']) && isset($_POST['new_password']) && isset($_POST['confirm_password'])){
        session_start();
        $user_id = $_SESSION["user_id"];
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];
        if ($new_password == $confirm_password) {
            $db = new PDO("sqlite:../../database/chess");
            $sql = "SELECT password FROM users WHERE user_id = $user_id";
            $result = $db->query($sql);
            foreach ($result as $row) {
                $db_password = $row['password'];
            };
            if ($db_password == sha1($old_password)) {
                $new_password = sha1($new_password);
                $sql = "UPDATE users SET password = '$new_password' WHERE user_id = $user_id";
                $db->exec($sql);
                $db = null;
                header("Location: ../../settings/index.php");
            }
            else{
                $db = null;
                header("Location: ../../settings/update_password.php");

            } 
        }
        else{
            header("Location: ../../settings/update_password.php");
        }
    }
    else{
        header("Location: ../../settings/update_password.php");
    }
?>