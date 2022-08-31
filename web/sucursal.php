<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('./PHP/resources.php')?>
    <title>Document</title>
</head>
<body>
<?php include('./PHP/header.php')?>

<h1 class="direccion">Nuestra sucursal esta en <span>2155 Mariano Fragueiro</span> Alta Córdoba</h1>
<section class="container pt-4 pb-4">
<div id="map" style="height: 500px;
	width: 100%; z-index:500;"></div>
</section>
<p class="noir">¡Es una direccion falsa, no ir!</p>
<?php include('./PHP/footer.php')?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
</body>
</html>