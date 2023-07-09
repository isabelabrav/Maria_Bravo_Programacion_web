<!DOCTYPE html>
<html lang="en">
<head>

    <title>Isabella_Bravo</title>
    <!-- Ícono personalizado en el navegador -->
    <link rel="icon" href="Icono.ico">
    <!-- estilos de css-->
    <link rel="stylesheet" href="style.css">
    <!-- Estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </link>
    <link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap" rel="stylesheet">
</head>



<body class="container mt-4">
    <!-- Barra de navegación personalizada -->
    <nav>
        <div style="text-align:center;">
             <a class="navbar-brand" href="#" style=color:bisque; >_Isabella_Bravo</a>
        </div>
    </nav>


    <!-- Contenido principal -->
    <section class="section1" style="text-align: center;">
        <h1 style="margin: 30px 0;">Makeup Artist and Hairstylist</h1>
        <h2> Bienvenida a visitar nuestro centro donde cada mujer es tratada con alta atención. Te daremos todo lo que tu belleza pueda necesitar.  </h2>
    </section>
<!-- contenedor de Imágenes, intente de muchas formas, pero me fue imposible centrar las imagenes. -->
    <div class="container mt-4">
        <?php
            $directorio = "./fotos/*.jpeg";
            $imagenes = glob($directorio);
            $totalim = count($imagenes);
            foreach ($imagenes as $indice => $imagen) {
                $clase = ($indice === 1 || $indice === $totalim -2) ? 'rounded-circle' : 'rounded';
                 echo  '<img class="img-fluid ' .$clase. '" src="' . $imagen . '" alt="Imagen" style = "margin-right: 20px; widht: 220px; height: 220px;" />';
            }
        ?>
    </div>
 <!-- Contenido secundario --> 
<!-- ol con color de fondo personalizado en CSS -->
    <ol class="container mt-4" >
        <h3> Somos un centro cálido y acogedor con altos estándares de belleza y salud. Somos los mejores en lo que hacemos.  </h3>
    </ol>
        
<!-- Dropdown de Bootstrap -->
    
<div class="dropdown">
        <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menú
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php">Inicio</a></li> 
            <li><a class="dropdown-item" href="cuento.php">Cuento</a></li>
            <li><a class="dropdown-item" href="secuencia.php">Secuencia</a></li>
        </ul>
    </div>
 
<!-- ul con color de fondo personalizado en CSS -->
<ul class="container mt-4" >
    <h4>Certificación:</h4>
    <p>Con Certificación en, Pivot Point, Redken, PlusHair, Inoar,Eva Berndt, Fontboté y Organic nail.</p>
  </ul>



    <!-- Carrucel de foto automatico, tenia otro carrusel automatico, sin las flechas de izquierda y derecha, pero no se movian las imagenes, tuve que cambiarlo-->
<div id="myCarousel" class="carousel slide mt-4" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="slides\imagen15.jpeg" class="d-block w-100" alt="Slide 1">
      </div>
      <div class="carousel-item">
        <img src="slides\imagen3.jpeg" class="d-block w-100" alt="Slide 2">
      </div>
      <div class="carousel-item">
        <img src="slides\imagen12.jpeg" class="d-block w-100" alt="Slide 3">
      </div>
      <div class="carousel-item">
        <img src="slides\imagen6.jpeg" class="d-block w-100" alt="Slide 4">
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<!-- Footer personalizado -->
<footer class="container mt-4" >
    <div style="text-align:center;">
      <p>María Isabel Bravo | _Isabella_Bravo</p>
    </div>
</footer>


<!-- Scrip personalizado
 
 <script>
    window.onload = function() {
      alert('Bienvenido a la página');

      var username = prompt('Ingresa tu nombre de usuario');
      if (username) {
        alert('Que tengas una linda experiencia, ' + username);
      }
    };
    </script> -->

   <!-- Scripts de Bootstrap -->

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>