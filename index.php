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

    while ($superChewi->getHealth() > 0) {
        $orc->attack();
        $superChewi->attacked($orc->getDamage());
        echo "💥 L'Orc a attaqué notre héros avec succès! 💥" . $br
            . "🔸 Dégâts de l'Orc: " . $orc->getDamage() . $br
            . "🔸 Dégâts absorbés par le bouclier: " . $superChewi->getShieldValue() . $br
            . "🔸 Dégâts non absorbés: " . ($orc->getDamage() - $superChewi->getShieldValue()) . $br
            . "🔸 Santé restante du Héros: " . $superChewi->getHealth() . $br
            . "🔸 Rage actuelle du Héros: " . $superChewi->getRage() . $br . $br;

        if ($superChewi->getHealth() <= 0) {
            echo "$br 🚑🚑🚑 Les points de vie du héros sont épuisés. Le héros est KO! 🚑🚑🚑";
        }

        if ($superChewi->getRage() >= 100 && $orc->getHealth() > 0) {
            $orc->setHealth($orc->getHealth() - $superChewi->getWeaponDamage());
            echo "💢 Le héros riposte! L'orc prend " . $superChewi->getWeaponDamage() . " de dégâts et a dorénavant une vie de "
                . $orc->getHealth() . " PV." . $br;
        }
    }

    ?>

</body>

</html>