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


// with for
echo "1) with while: <br>";
$N = 10;

// calcul de N!
$nf = 1; // la valeur neutre de la multiplication
$i = 1;
while ($i <= $N) {
    $nf *= $i; // $nf = $nf * $i;
    $i++;
}
echo "La valeur de ". $N . "! est: " . $nf . "<br>";

// with for
echo "2) with for: <br>";
$N = 10;

// calcul de N!
$nf = 1;
for ($i = 1; $i <= $N; $i++) {
    $nf *= $i; // $nf = $nf * $i;
}

echo "La valeur de ". $N . "! est: " . $nf . "<br>";

echo "<hr>";
echo "Exercice 2: <br>";
// Declaration et initialisation 
$X = 15;
$n = 10;

// avec for
echo "2) avec for: <br>";
// calcul de X^n
$Xn = 1;
for ($i = 1; $i <= $n; $i++) {
    $Xn *= $X; // $Xn = $Xn * $X;
}

echo "La valeur de ". $X . "^" . $n . " est: " . $Xn . "<br>";

// avec while
echo "1) avec while: <br>";
// calcul de X^n
$Xn = 1;
$i = 1;
while ($i <= $n) {
    $Xn *= $X; // $Xn = $Xn * $X;
    $i++;
}
echo "La valeur de ". $X . "^" . $n . " est: " . $Xn . "<br>";

echo "<hr>";
echo "Exercice 3: <br>";
// Declaration et initialisation 
$N = 10;

// avec for
echo "2) avec for: <br>";
$S = 0;
for ($i = 1; $i <= $N; $i++) {
    $S += $i; // $S = $S + $i;
}
echo "La somme de 1 à " . $N . " est: " . $S . "<br>";

// avec while
echo "1) avec while: <br>";
$S = 0;

$i = 1; // initialisation de i
while ($i <= $N) { // condition d'arret
    $S += $i; // $S = $S + $i;
    $i++; // incrémentation
}

echo "La somme de 1 à " . $N . " est: " . $S . "<br>";

echo "<hr>";
echo "Exercice 4: <br>";
// Affichage des lettres de l'alphabet avec la fonction de conversion ASCII
$i = 97; // code ASCII de a
while ($i <= 122) {
    echo chr($i) . "<br>";
    $i++;
}
echo "<hr>";
// Avec un affihchage formaté printf
$i = 65; // code ASCII de A
printf("CODE ASCII: Lettre <br>");
while ($i <= 90) {
    printf("%d: %c <br>", $i, $i);
    $i++;
}
echo "<hr>";
// avec for
echo "2) avec for: <br>";
for ($i = 65; $i <= 90; $i++) {
    printf("%d: %c <br>", $i, $i);
}

echo "<hr>";

for ($i = 65; $i <= 90; $i++) {
    echo chr($i) . "<br>";
}
?>
