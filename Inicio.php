<!DOCTYPE html>
<html lang="en">
<head>

    <title>Inicio</title>
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

 <!-- Contenido primario --> 

<div class="container">
            <?php
            echo '<h1 style="text-align:center;">Bienvenido(a) a la Página de Inicio</h1>';
            ?>
            <form action="Index.php" method="POST">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="edad" class="form-label">Edad:</label>
                    <input type="number" class="form-control" id="edad" name="edad" required>
                </div>
                <div class="mb-3">
                    <label for="interes" class="form-label">Estoy interesado/a en la información de la página:</label>
                    <input type="checkbox" id="interes" name="interes">
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
 
<!-- Footer personalizado -->
<footer class="container mt-4" >
    <div style="text-align:center;">
      <p>María Isabel Bravo | _Isabella_Bravo</p>
    </div>
</footer>

   <!-- Scripts de Bootstrap -->

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>