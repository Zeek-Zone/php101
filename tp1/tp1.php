
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
// hello world
echo "Hello World";

// line break with an horizontal line
echo "<hr>";
echo "Exercice 1: <br>";
echo "Ceci est une ligne créée uniquement en PHP";
echo "<br> ceci est un autre ligne. <br>";
echo "<a href='https://www.google.com' target='_blank'>Google</a>";
echo "<hr>";
echo "Exercice 2: <br>";

$nom = "Dupont"; // declaration et initialisation de variable
$prenom = "Louis";

// 2 Commandes echo
echo "Nom: $nom <br>";
echo "Prénom: $prenom <br>";

// 1 Commandes echo
echo "Nom: $nom, Prénom: $prenom <br>";

// 1 Commandes echo avec concaténation (.)
echo "Nom: " . $nom . ", Prénom: " . $prenom . "<br>";

echo "Exercice 3: <br>";
echo "<h1>Calcul sur les variables</h1>";
$TVA = 0.206;
$prix = 150;
$nombre = 10;

// 1 Commandes echo
echo "Prix: $prix, TVA: $TVA, Nombre: $nombre <br>";

// le type de chaque variable
echo "Type de prix: " . gettype($prix) . "<br>";
echo "Type de TVA: " . gettype($TVA) . "<br>";
echo "Type de Nombre: " . gettype($nombre) . "<br>";
// autrement with var_dump
echo "Type de prix: ";
echo var_dump($prix) . "<br>";
echo "Type de TVA: ";
echo var_dump($TVA) . "<br>";
echo "Type de Nombre: ";
echo var_dump($nombre) . "<br>";


echo "Exercice 4: <br>";
// Declaration et initialisation de prix_table, prix_armoire et nombre 
$prix_table = 150;
$prix_armoire = 50;
$nombre = 10;

echo "1) Prix total de " . $nombre . " armoires:<br>";
$prix_total = $prix_armoire * $nombre;
echo $prix_total . " MAD<br>";

echo "2) Le prix le plus elevé:<br>";
if ($prix_table > $prix_armoire) {
    echo "Table:". $prix_table . " MAD<br>";
} else {
    echo "Armoire:". $prix_armoire . " MAD<br>";
}
echo "Exercice 5: <br>";
$nbre = 10;
// avec for
$somme = 0;

for ($i = 1; $i <= $nbre; $i++){

    $somme = $somme + $i;

}
echo "Somme des entiers de 1 à " . $nbre . " est: " . $somme."<br>";

// avec while
$somme = 0;

$i = 1;

while ($i <= $nbre){
    $somme = $somme + $i;

    $i++; // $i = $i + 1
}
echo "Somme des entiers de 1 à " . $nbre . " est: " . $somme."<br>";

echo "Exercice 3: <br>";
echo "Exercice 3: <br>";
?>
