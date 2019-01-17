<!DOCTYPE html>
<html lang="hr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css">
    <title>Z1 - HTML</title>
</head>
<body>
<h1 ></h1><br>
<h1>Prva stranica</h1><br>
<ul>
    <li><a href="index.php">1. stranica</a></li>
    <li><a href="bootstrap.php">2. stranica</a></li>
    <li><a href="foundation.php">3. stranica</a></li>
    <li><a href="skeleton.php">4. stranica</a></li>
    <li><a href="responsivegridsystem.php">5. stranica</a></li>
</ul>

<?php

//
$a = 12;
$b = 15;

echo $a + $b."<br>";

$x = 15;
$y = 12;

echo $x % $y."<br>";

$x = 50;
$x -= 30;

echo $x."<br>";

$x = "Osijek";
$y = "Vinkovci";

var_dump($x === $y);

?>

<?php echo '<hr />'; ?>

<?php

$x = "Osijek";
$y = 8;

var_dump($x === $y);

?>
<?php echo '<hr />'; ?>
<?php
$x = "Ja";
$y = " volim";
$z = " Osijek!";

echo $x . $y . $z;

?>

<?php echo '<hr />'; ?>

<?php
$a = 7;
$b = 6;
$c = 5;


?>


</body>
</html>
