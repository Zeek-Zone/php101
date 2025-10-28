<!-- Nav Bar: Home, TP1, TP2, TP3, TP4 -->
<nav style="background-color: #08aaafff; color: #fff; padding: 10px;">
    <ul>
        <li style="display: inline-block; margin-right: 10px;"><a href="../index.php">Home</a></li>
        <li style="display: inline-block; margin-right: 10px;"><a href="./tp1.php">TP1</a></li>
        <li style="display: inline-block; margin-right: 10px;"><a href="./tp2.php">TP2</a></li>
        <li style="display: inline-block; margin-right: 10px;"><a href="./tp3.php">TP3</a></li>
        <li style="display: inline-block; margin-right: 10px;"><a href="./tp4.php">TP4</a></li>
    </ul>
</nav>

<?php
echo "<hr>";
echo "Exercice 1: <br>";
$w = 69;
$x = 21;
$y = 1;
$z = 15;

echo "w = $w , x = $x, y = $y, z = $z <br>";

$temporaire = $w;
$w = $z;
$z = $x;
$x = $y;
$y = $temporaire;

echo "<br>Après permutation/echange: <br>";
echo "w = $w , x = $x, y = $y, z = $z <br>";
echo "<hr>";

echo "Exercice 2: <br>";
$heures = 15;
$minutes = 01;
$secondes = 15;

// Operation de base
$secondes += 1; // $secondes = $secondes + 1;
if ($secondes == 60) {
    $minutes += 1;
    $secondes = 0;
    if ($minutes == 60) {
        $heures += 1;
        $minutes = 0;
        if ($heures == 24) {
            $heures = 0;
        }
    }
}

echo "Dans une seconde, il y sera $heures heure(s) $minutes minute(s) $secondes seconde(s).<br>";

echo "<hr>";
echo "Exercice 3: <br>";
$jour = "Dimanche";

echo "1) Avec if: <br>"; 
if ($jour == "Lundi") {
    echo "Salut, c'est le premier jour de la semaine. ";
} elseif ($jour == "Mardi") {
    echo "Salut, c'est le deuxième jour de la semaine. ";
} elseif ($jour == "Mercredi") {
    echo "Salut, c'est le troisième jour de la semaine. ";
} elseif ($jour == "Jeudi") {
    echo "Salut, c'est le quatrième jour de la semaine. ";
} elseif ($jour == "Vendredi") {
    echo "Salut, c'est le cinquième jour de la semaine. ";
} elseif ($jour == "Samedi") {
    echo "Salut, c'est le premier jour du week-end. ";
} elseif ($jour == "Dimanche") {
    echo "Salut, c'est le deuxième jour du week-end. ";
} else {
    echo "Jour inconnu.";
}

echo "<br>2) Avec switch: <br>";

switch ($jour) {
    case "Lundi":
        echo "Salut, c'est le premier jour de la semaine. ";
        break;
    case "Mardi":
        echo "Salut, c'est le deuxième jour de la semaine. ";
        break;
    case "Mercredi":
        echo "Salut, c'est le troisième jour de la semaine. ";
        break;
    case "Jeudi":
        echo "Salut, c'est le quatrième jour de la semaine. ";
        break;
    case "Vendredi":
        echo "Salut, c'est le cinquième jour de la semaine. ";
        break;
    case "Samedi":
        echo "Salut, c'est le premierjour du week-end. ";
        break;
    case "Dimanche":
        echo "Salut, c'est le deuxième jour du week-end. ";
        break;
    default:
        echo "Jour inconnu.";
        break;
}

echo "<br>";

echo "<hr>";
echo "Exercice 4: <br>";

$n = 4;

// Affichage de l'escalier/triangle
echo "1) Affichage de l'escalier/triangle: <br>";
for($i = 1; $i <= $n; $i++) {
    for($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

echo "Avec while: <br>";
$n = 4;
$i = 1;
while($i <= $n) {
    $j = 1;
    while($j <= $i) {
        echo "*";
        $j++;
    }
    echo "<br>";
    $i++;
}

echo "<br>";

// Affichage de l'escalier/triangle inversé
"2) Affichage de l'escalier/triangle inversé: <br>";
for($i = 1; $i <= $n; $i++) {
    for($j = 1; $j <= $n - $i + 1; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";
// Affichage du carré d'étoiles
echo "3) Affichage du carré d'étoiles: <br>";
for($i = 1; $i <= $n; $i++) {
    for($j = 1; $j <= $n; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<hr>";
echo "Exercice 5: <br>";
$nombre = 5;

// pair ou impair
if ($nombre % 2 == 0) {
    echo "Le nombre $nombre est pair.<br>";
} else {
    echo "Le nombre $nombre est impair.<br>";
}

echo "<hr>";
$note = 16;
if ($note < 8) {
    echo "mauvais.<br>";
} elseif ($note < 10) {
    echo "pas bon.<br>";
} elseif ($note <= 12) {
    echo "correct.<br>";
} elseif ($note <= 16) {
    echo "bon.<br>";
} else {
    echo "Très bien.<br>";
} 

echo "<hr>";
echo "Exercice 6: <br>";

echo " Avec for: <br>";
$n = 100;
for ($i = 1; $i <=$n; $i++) {
    echo "$i";

    if ($i < $n) {
        echo "-";
    }
}
echo "<br>";
echo " Avec while: <br>";
$i = 1; 
while ($i <= $n) {
    echo "$i";

    if ($i < $n) {
        echo "-";
    }
    $i++;
}
echo "<br>";
echo "<hr>";
echo "Exercice 7: <br>";
$debut = 1;
$fin = 100;
$pas = 2;
for ($i = $debut; $i <= $fin; $i += $pas) {
    echo "$i";

    if ($i < $fin-$pas) {
        echo "-";
    }
}
echo "<br>";
echo " Avec while: <br>";
$i = $debut;
while ($i <= $fin) {
    echo "$i";

    if ($i < $fin-$pas) {
        echo "-";
    }
    $i += $pas;
}

echo "<br>";
echo "<hr>";
echo "Exercice 8: <br>";

$lignes = 10;
$colonnes = 10;

$nbr = 1;
for ($i = 1; $i <= $lignes; $i++) {
    for ($j = 1; $j <= $colonnes; $j++) {
        printf("%03d ", $nbr); // echo "$nbr ";
        $nbr++;
    }
    echo "<br>";
}

echo "<hr>";
echo "Exercice 9: <br>";
// Table de multiplication de 1 à 9
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        $resultat = $i * $j;
        printf("%02d ", $resultat); // echo "$resultat ";
    }
    echo "<br>";
}
