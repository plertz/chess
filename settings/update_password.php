<!DOCTYPE html>
<html lang="en">
<head> 
    <?php
        include "../includes/general/auth.php";
        $loggedIn = auth("../");
        if (!$loggedIn) {
            header("Location: ../auth/login");
        }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password | Chess online</title>
</head>
<body>
    <form action="../includes/settings/update_password.php" method="post">
        <label for="old_password">Old Password</label>
        <input type="password" name="old_password" id="old_password">
        <label for="new_password">New Password</label>
        <input type="password" name="new_password" id="new_password">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password" id="confirm_password">
        <input type="submit" name="submit" value="Change Password">
    </form>
</body>
</html>