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
    $br = "<br>";
    $superChewi = new Hero(2000, "Banane", 250, "Moulin à café", 600);
    $superChewi->displayHero();
    $orc = new Orc(500, 0);
    $orc->displayOrc();
    $orc->attack();
    $superChewi->attacked($orc->getDamage());

    echo "💥 L'Orc a attaqué notre héros avec succès! 💥" . $br
    . "🔸 Dégâts de l'Orc: " . $orc->getDamage() . $br
    . "🔸 Dégâts absorbés par le bouclier: " . $superChewi->getShieldValue() . $br
    . "🔸 Dégâts non absorbés: " . ($orc->getDamage() - $superChewi->getShieldValue()) . $br
    . "🔸 Santé restante du Héros: " . $superChewi->getHealth() . $br
    . "🔸 Rage actuelle du Héros: " . $superChewi->getRage() . $br;
    ?>

</body>

</html>