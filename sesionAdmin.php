<?php
    session_start();
    include 'php/conexion_be.php';

    if (!isset($_SESSION['usuario'])){        
        echo '
            <script>
                alert("Primero debes iniciar sesión");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }
    //header("location: index.php");
?>
<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PimpoFisio</title>
    <style>
        @import url(estilos/estilo.css);
        @import url(estilos/estiloSesion.css);
    </style>
</head>
<body class="body">
    <!-- HEADER --> 
    
    <header>
        <a href="#" class="logo"><img src="imagenes/logoTransparente.png" alt="Logo"></a>
        <!-- SESION -->
        <div class="sesiones admin">
            <div><a>Hola</a>
            <a><?php echo $_SESSION['usuario'];?></a></div>               
            <a class="cerrar" href="php/cerrar_sesion.php">Cerrar sesión</a>
        </div>
        <!-- NAV -->
        <nav class="nav"> 
            <a class="nav-toggle"><i class="barra_menu"></i></a>
            <ul class="nav-menu nav-menu_visible">
                <li class="nav-menu-item"><a href="index.html" class="nav-menu-link">Inicio</a></li>
                <li class="nav-menu-item"><a href="#citas" class="nav-menu-link">citas</a></li>
                <li class="nav-menu-item"><a href="#informes" class="nav-menu-link">informes</a></li>
                <li class="nav-menu-item"><a href="#calendario" class="nav-menu-link">calendario</a></li>
            </ul>
        </nav>
    </header>
        
    <main>
        <!-- CITAS -->
        <!-- INFORMES -->
        <!-- CALENDARIO -->








    <?php
              /*  //Buscamos los nombres de usuario 
                $consulta = "SELECT correo FROM usuarios WHERE correo = '$correo'";
                //Guardamos el nombre en una variable
                $resultado = mysqli_query ($conexion, $consulta);
                //mostramos el array de nombres guardado
                while($row=mysqli_fetch_assoc($resultado)){*/
                //Mostramos el resultado de esa fila concreta
            ?>
            <?php 
                //}
              //  mysqli_free_result($resultado);
            ?>
    </main>
    <footer>
        <p>Proyecto realizado por Pablo Rodríguez Fernández</p>
    </footer>   
</body>
</html>