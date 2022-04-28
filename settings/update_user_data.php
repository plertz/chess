<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../includes/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update user data | Chess online</title>
    <?php
        include "../includes/general/auth.php";
        $loggedIn = auth("../");
        if (!$loggedIn) {
            header("Location: ../auth/login");
        }
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        include "../includes/settings/update_user_data.php";
    ?>
</head>
<body>
    <div class="data-update">
        <p>Your data has been updated click <a href="index.php">here</a> to go back to the settings page</p>
    </div>
</body>
</html>