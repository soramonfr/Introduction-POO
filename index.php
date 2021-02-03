<?php
spl_autoload_register(function ($class) {
    include 'models/' . $class . '.php';
});
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction à la POO</title>
</head>

<body>
    <?php
    $superChewi = new Hero();
    $superChewi->setWeapon("Banane");
    $superChewi->attacked(13);
    $superChewi->displayHero();
    $orc = new Orc(100, 50);
    $orc->displayOrc();
    $orc->attack();
    $orc->displayOrc();
    ?>

</body>

</html>