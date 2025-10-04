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

// calcul de X^n
$Xn = 1;
for ($i = 1; $i <= $n; $i++) {
    $Xn *= $X; // $Xn = $Xn * $X;
}

echo "La valeur de ". $X . "^" . $n . " est: " . $Xn . "<br>";
?>
