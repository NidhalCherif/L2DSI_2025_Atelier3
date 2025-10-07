<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        Nom: <input type="text" name="nom" id=""><br>
        Age : <input type="text" name="age" id=""><br>
        Ville: <input type="text" name="adr" id=""><br>
        <input type="submit" value="Envoyer" name="ok">
    </form>
    <?php
    if (isset($_POST['ok'])) {
        echo "Votre nom est " . htmlspecialchars($_POST['nom']);
        echo "<br>Votre age est " . htmlspecialchars($_POST['age']);
    }
    ?>
</body>

</html>