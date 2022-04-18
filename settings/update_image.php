<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "../includes/general/auth.php";
    $loggedIn = auth("../");
    if (!$loggedIn) {
        header("Location: ../auth/login");
    }
    $user_id = $_SESSION["user_id"];
    if (isset($_FILES['file'])) {
        $fileContent = file_get_contents($_FILES['file']['tmp_name']);
        $info = pathinfo($_FILES['file']['name']);
        $ext = $info['extension'];
        $newname = $user_id. "." .$ext; 

        $target = "../includes/icon/" . $newname;
        move_uploaded_file( $_FILES['file']['tmp_name'], $target);
        $db = new PDO("sqlite:../database/chess");
        $sql = "UPDATE icon SET icon = '$newname' WHERE user_id = $user_id";
        $db->exec($sql);
        $db = null;
        header("Location: index.php");
    }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change icon | Chess online</title>
</head>
<body>
    <form action="update_image.php" method="post" enctype="multipart/form-data" accept="image/jpg, image/png, image/gif">
        <input name="file" type="file">
        <input type="submit" value="submit">
    </form>
</body>
</html>