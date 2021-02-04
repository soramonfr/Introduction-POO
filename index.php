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
    <title>Introduction à la POO - RPG</title>
</head>

<body>
    <?php
    $br = "<br>";
    $superChewi = new Hero(2000, "Banane", 250, "Moulin à café", 600);
    $superChewi->displayHero();
    $orc = new Orc(500, 0);
    $orc->displayOrc();

    while ($superChewi->getHealth() > 0 && $orc->getHealth() > 0) {
        $orc->attack($superChewi);

        if ($superChewi->getHealth() <= 0) {
            echo "🚑🚑🚑 Les points de vie du héros sont épuisés. Le héros est KO! 🚑🚑🚑";
        }

        if ($orc->getHealth() <= 0) {
            echo "☠💀☠ L'Orc a été vaincu, félicitations! ☠💀☠";
        }
    }
    ?>

</body>

</html>