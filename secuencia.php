<!DOCTYPE html>
<html lang="en">
<head>

    <title>Secuencia</title>
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
 
<!-- Secuencia fibonacci -->

    <div class="container mt-4" >
        <div style="text-align:center;">
            <form class="row g-3" method="post">
                <div class = "mt-3">
                    <label for="num" class="mr-2">Ingrese su número de comienzo:</label>
                    <input type="number" id="num" name="num" min="1" class="form-control mr-2">
                    <input type="submit" value="Generar secuencia" class="btn btn-success">
                </div>
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num = $_POST["num"];
                function fibonacci($num)
                {
                    $num_1 = 0;
                    $num_2 = 1;
                    $i = 0;
                    echo '<p class="mt-3">Secuencia de fibonacci:';
                    while ($i <= $num) {
                        echo "" . $num_1.",";
                        $num_3 = $num_2 + $num_1;
                        $num_1 = $num_2;
                        $num_2 = $num_3;
                        $i++;
                    }
                    echo "</p>";
                }
                fibonacci($num);
            }
            ?>
        </div>
    </div>

    
<!-- Footer personalizado -->
<footer  class="container mt-4">
    <div style="text-align:center;">
      <p>María Isabel Bravo | _Isabella_Bravo</p>
    </div>
</footer>

   <!-- Scripts de Bootstrap -->

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>