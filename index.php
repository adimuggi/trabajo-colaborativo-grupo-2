<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Proyecto Web</title>
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        body {
            background-color: #fae0f4ff;
            color: #243caaff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #00d42eff;
            padding: 10px;
            text-align: center;
        }
        .banner {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
        }
        .logo {
            height: 50px;
            float: left;
            margin-right: 20px;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 10px 0 0 0;
        }
        nav ul li {
            display: inline;
            margin: 0 15px;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            color: #ffeb3b;
        }
        main {
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #ee2bbaff;
        }
        button {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #45a049;
        }
        footer {
            background-color: #4dbed2ff;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .dark body {
            background-color: #263238;
            color: #eceff1;
        }
        .dark header {
            background-color: #37474f;
        }
        .dark nav a {
            color: #eceff1;
        }
        .dark nav a:hover {
            color: #ffeb3b;
        }
        .dark main h1 {
            color: #80deea;
        }
        .dark button {
            background-color: #4caf50;
        }
        .dark footer {
            background-color: #c0c061ff;
        }
    </style>
</head>
<body>

<header>
    <img src="img/logo.png" alt="Logo" class="logo">
    <img src="img/banner.png" class="banner">
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="about.php">Sobre Nosotros</a></li>
            <li><a href="contac.php">Contacto</a></li>
            <li><a href="register.php">Registro</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>Bienvenido</h1>
    <p>Este sitio web ha sido desarrollado como parte de un proyecto académico en la carrera de Arquitectura de Plataformas de Servicios Tecnológicos de la Información del Instituto Superior Tecnológico Público "Daniel Alcides Carrión". El proyecto integra conocimientos en diseño web, programación y gestión de proyectos colaborativos utilizando herramientas modernas como GitHub.</p>
    
    <p>Explora las diferentes secciones del sitio para conocer más sobre nuestro equipo, contactarnos o registrarte en nuestra plataforma. Este trabajo refleja el compromiso de los estudiantes con la excelencia académica y la aplicación práctica de las tecnologías de la información.</p>
    
    <p>Hora actual: <span id="hora"></span></p>
    <button id="toggle-theme">Cambiar Tema</button>
</main>

<footer>
    <p>copyraid Aldair MUGGI PULIDO</p>
</footer>

<script src="js/funciones.js"></script>
</body>
</html>