<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post"
        enctype="multipart/form-data">

        votre image: <input type="file" name="image" id="">
        <input type="submit" value="Envoyer" name="ok">
    </form>
    <?php
    if (isset($_POST['ok'])) {
        if (is_uploaded_file($_FILES['image']["tmp_name"])) {
            move_uploaded_file($_FILES['image']['tmp_name'], "drapeau.jpg");
            echo "<img src='{$_FILES['image']["name"]}' alt='image'>";
        }
    }
    ?>
</body>

</html>