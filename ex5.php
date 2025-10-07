<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="submit" value="Achat" name="achat">
        <input type="submit" value="Vente" name="vente">
        <input type="submit" value="Location" name="location">
    </form>
    <?php
    if (isset($_POST['vente'])) {
        header("Location: vente.php");
        exit;
    }

    if (isset($_POST['achat'])) {
        header("Location: achat.php");
        exit;
    }

    if (isset($_POST['location'])) {

        header("Location: location.php");
        exit;
    }
    ?>
</body>

</html>