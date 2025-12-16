<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        body {
            background-color: #e8f5e8;
            color: #2e7d32;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4caf50;
            padding: 10px;
            text-align: center;
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
        nav a:hover, nav a.active {
            color: #ffeb3b;
        }
        main {
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #388e3c;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #c8e6c9;
            padding: 20px;
            border-radius: 10px;
        }
        label {
            display: block;
            margin-top: 10px;
            color: #2e7d32;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #4caf50;
            border-radius: 5px;
        }
        button {
            background-color: #17a4cfff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }
        button:hover {
            background-color: #3c9bdaff;
        }
        footer {
            background-color: #37474f;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .dark body {
            background-color: #1b5e20;
            color: #e8f5e8;
        }
        .dark header {
            background-color: #2e7d32;
        }
        .dark nav a {
            color: #e8f5e8;
        }
        .dark nav a:hover, .dark nav a.active {
            color: #ffeb3b;
        }
        .dark main h1 {
            color: #81c784;
        }
        .dark form {
            background-color: #388e3c;
        }
        .dark label {
            color: #e8f5e8;
        }
        .dark input {
            border-color: #4caf50;
            background-color: #2e7d32;
            color: #e8f5e8;
        }
        .dark button {
            background-color: #66bb6a;
        }
        .dark button:hover {
            background-color: #4caf50;
        }
        .dark footer {
            background-color: #102027;
        }
    </style>
</head>
<body>

<header>
    <img src="img/logo.png" alt="Logo" class="logo">
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="about.php">Sobre Nosotros</a></li>
            <li><a href="contac.php">Contacto</a></li>
            <li><a class="active" href="register.php">Registro</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>Formulario web de Registro</h1>
    <p>Como parte de nuestro proyecto académico en la carrera de Arquitectura de Plataformas de Servicios Tecnológicos de la Información, ofrecemos un formulario de registro para demostrar funcionalidades básicas de procesamiento de datos en aplicaciones web. Regístrate para acceder a futuras actualizaciones o para fines demostrativos del proyecto.</p>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST['nombre']);
        $correo = htmlspecialchars($_POST['correo']);
        echo "<p>¡Gracias por registrarte, $nombre! Te hemos enviado un correo de confirmación a $correo.</p>";
    } else {
    ?>

    <form action="" method="post">
        <label>Nombre completo:</label>
        <input type="text" name="nombre" required>

        <label>Correo electrónico:</label>
        <input type="email" name="correo" required>

        <label>Contraseña:</label>
        <input type="password" name="pass" required>

        <button type="submit">guardar</button>
    </form>
<button type="submit">Registrarse</button>
    <?php
    }
    ?>
</main>

<footer>
    <p>© 2025 Proyecto Web Colaborativo</p>
</footer>

<script src="js/funciones.js"></script>
</body>
</html>