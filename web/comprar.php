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
<?php include('../config/db.php')?>
<?php include('./PHP/header.php')?>
<section class="container pt-4 pb-4" style="padding-bottom: 11% !important;">
<form action="" method="POST" class="infoC">
    <label for="">Nombre</label>
    <input type="text" required placeholder="Nombre" name="nombre">
    <label for="">Apellido</label>
    <input type="text" required placeholder="Apellido" name="apellido"> <br> <br>
    <label for="">DNI</label>
    <input type="num" required placeholder="DNI" name="dni"> <br> <br>
    <label for="">Mail</label>
    <input type="email" required placeholder="Mail" name="mail"><br><br>
    <label for="">Numero de celular</label>
    <input type="tel" required placeholder="Num tel" name="num"><br><br>
    <label for="provincias">Selecciona la provincia</label>
    <select name="provincias" id="provincias">
        <option value="Buenos Aires">Buenos Aires</option>
        <option value="Córdoba">Córdoba</option>
        <option value="Entre Rios">Entre Rios</option>
        <option value="La Rioja">La Rioja</option>
        <option value="Jujuy">Jujuy</option>
        <option value="Santiago del Estero">Santiago del Estero</option>
        <option value="Corrientes">Corrientes</option>
        <option value="Chaco">Chaco</option>
    </select>
    <label for="">CP</label>
    <input type="num" required placeholder="Codigo Postal" name="cp"><br><br>
    <button class="btn-24" type="submit" name="boton" onclick="alert('La compra no fue realizada por que es una pagina de prueba, no existe realmente. Dale aceptar para volver a la pagina principal');"><span>Enviar Info</span></button>
    <?php 

        if(isset($_POST['boton'])){
            if (strlen($_POST['nombre']) >= 1 &&
                strlen($_POST['apellido']) >= 1 &&
                strlen($_POST['dni']) >= 1 &&
                strlen($_POST['mail']) >= 1 &&
                strlen($_POST['provincias']) >= 1 &&
                strlen($_POST['num']) >= 1 &&
                strlen($_POST['cp']) >= 1){
                    $nombre = trim($_POST['nombre']);
                    $apellido = trim($_POST['apellido']);
                    $dni = trim($_POST['dni']);
                    $mail = trim($_POST['mail']);
                    $provincias = trim($_POST['provincias']);
                    $num = trim($_POST['num']);
                    $cp = trim($_POST['cp']);

            $consul="INSERT INTO compradores(Nombre, Apellido, dni, mail, provincia, NumCelu, CodigoPostal) VALUES ('$nombre','$apellido','$dni','$mail', '$provincias','$num','$cp')";
        $resultado=mysqli_query($conn,$consul);
    }
    echo '<script type="text/javascript">
setTimeout( function() { window.location.href = "http://localhost:3000/Php-comienzo/proyectoFinal2/web/"; }, 1000 );
</script>';
}

    ?>
</form>
</section>
<?php include('./PHP/footer.php')?>
</body>
</html>