<?php
/*echo "<pre>";
var_dump($_POST);
echo "</pre>";*/
echo "Votre nom est " . htmlspecialchars($_POST['nom']);
echo "<br>Votre age est " . htmlspecialchars($_POST['age']);
