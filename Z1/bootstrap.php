<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.css">
    <meta charset="UTF-8" />
    <title>Z1 - Bootstrap</title>
</head>
<body>


<div class="jumbotron">
    <h1 class="display-4">Bootstrap primjer</h1>

    <ul class="list-group">
        <li class="list-group-item"><a href="index.php">1. stranica</a></li>
        <li class="list-group-item"><a href="bootstrap.php">2. stranica</a></li>
        <li class="list-group-item"><a href="foundation.php">3. stranica</a></li>
        <li class="list-group-item"><a href="skeleton.php">4. stranica</a></li>
        <li class="list-group-item"><a href="responsivegridsystem.php">5. stranica</a></li>
    </ul>



</div>

<?php
$x = "Osijek";
$y = 8;

var_dump($x !== $y);
?>

<?php echo '<hr />'; ?>

<?php
$output = `date`;
echo "Današnji datum je: $output";
?>
<?php echo '<hr />'; ?>

<?php
$ime = Andrea;
echo gettype($ime);
?>



<script src="bootstrap/js/bootstrap.js"></script>">
<script src="bootstrap/js/bootstrap.bundle.js"></script>">



</body>
</html>
