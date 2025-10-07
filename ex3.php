<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        Nom: <input type="text" name="nom" id=""><br>
        commentaire: <textarea name="com" id=""></textarea>
        Email: <input type="email" name="email" id="">
        Q1: Indiquez les éléments du site que vous aimez:
        Design du site :<input type="checkbox" value="Design du site" name="Q1[]" id="">
        Les liens :<input type="checkbox" value="Les liens" name="Q1[]" id="">
        Facilité de navigation :
        <input type="checkbox" value="Facilité de navigation" name="Q1[]" id="">
        Les images<input type="checkbox" value="Les images" name="Q1[]" id="">
        <input type="submit" value="Afficher" name="ok">
    </form>
    <?php
    if (isset($_POST['ok'])) {
        //echo "votre nom est " . htmlspecialchars($_POST['nom']);
        //echo "<br> ce que vous aimez : ";
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
    }
    ?>

</body>

</html>