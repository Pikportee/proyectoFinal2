<?php
include('../config/db.php');
?>

<!DOCTYPE html>
<html lang="es-ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('./PHP/resources.php')?>
    
</head>
<body>
<?php include('../config/db.php')?>
    <?php include('./PHP/header.php')?>
    <main class="main" id="main-content">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><a href="#"><img src="imagenes/a1-monitores-2022.webp" alt="monitor" style="width:100%;"></a></div>
        <div class="swiper-slide"><a href="#"><img src="imagenes/a1-notebook-mejor-precio.webp" alt="notebook" style="width:100%;"></a></div>  
        <div class="swiper-slide"><a href="#"><img src="imagenes/pc-armadas-gamer.webp" alt="notebook" style="width:100%;"></a></div>     
      </div>
      
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

    <!--Conexion PHP mysql-->
    <?php
        $sql="SELECT * FROM productos";
        $resultado=mysqli_query($conn,$sql);

        while($mostrar=mysqli_fetch_array($resultado)){

        
    ?>

      <section class="container pt-4 pb-4">
      <h1 id="<?php print $mostrar['titulo']?>"><u><?php echo $mostrar['titulo'];?></u></h1>
        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0">
          <article class="noticias-front">
                        <a href="#">
                        <figure><?php echo '<img src="imagenes/'.$mostrar['imagen'].'.jpg" width="300px" height="300px" alt="articulo1" class="img-fluid>"';?></figure>
                        <div class="contenido">
                            <p class="precio"><?php echo'$' . $mostrar['precio'];?></p>
                        <h2><?php echo $mostrar['producto'];?>
                        </h2>
                        </div>
                        </a>
                        <button class="mas">Ver más</button>
                    </article>
          </div>

          
          <div class="col-md-4 mb-4 mb-md-0">
            
                    <article class="noticias-front">
                    <a href="#">
                    <figure><?php echo '<img src="imagenes/'.$mostrar['imagen'].'.jpg" width="300px" height="300px" alt="articulo1" class="img-fluid>"';?></figure>
                    <div class="contenido">
                    <p class="precio"><?php echo'$' . $mostrar['precio'];?></p>
                    <h2><?php echo $mostrar['producto'];?>
                    </h2>
                    </div>
                    </a>
                    <button class="mas">Ver más</button>
                </article>
            </div>

            <div class="col-md-4 mb-4 mb-md-0">
                    <article class="noticias-front">
                    <a href="#">
                    <figure><?php echo '<img src="imagenes/'.$mostrar['imagen'].'.jpg" width="300px" height="300px" alt="articulo1" class="img-fluid>"';?></figure>
                    <div class="contenido">
                    <p class="precio"><?php echo'$' . $mostrar['precio'];?></p>
                    <h2><?php echo $mostrar['producto'];?>
                    </h2>
                    </div>
                    </a>
                    <button class="mas">Ver más</button>
                </article>
            </div>
        </div>

        <img src="imagenes/mejores-precios-main-top.webp" alt="mejores precios" style="width:100%; padding-top:50px;">
        <?php
        }
        ?>
        </div>
    </main>


    <?php include('./PHP/footer.php')?>
   
</body>
</html>