<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        body {
            background-color: #f8f3f6ff;
            color: #c71515ff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #c70c5aff;
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
        h1, h2 {
            color: #bf360c;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #ffe0b2;
            padding: 20px;
            border-radius: 10px;
        }
        label {
            display: block;
            margin-top: 10px;
            color: #e65100;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ff9800;
            border-radius: 5px;
        }
        button {
            background-color: #f57c00;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }
        button:hover {
            background-color: #ef6c00;
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
            background-color: #3e2723;
            color: #efebe9;
        }
        .dark header {
            background-color: #5d4037;
        }
        .dark nav a {
            color: #efebe9;
        }
        .dark nav a:hover, .dark nav a.active {
            color: #ffeb3b;
        }
        .dark main h1, .dark main h2 {
            color: #ffab91;
        }
        .dark form {
            background-color: #4e342e;
        }
        .dark label {
            color: #efebe9;
        }
        .dark input, .dark textarea {
            border-color: #8d6e63;
            background-color: #5d4037;
            color: #efebe9;
        }
        .dark button {
            background-color: #8d6e63;
        }
        .dark button:hover {
            background-color: #6d4c41;
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
            <li><a class="active" href="contac.php">Contacto</a></li>
            <li><a href="register.php">Registro</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>Contáctanos</h1>
    <p>Si tienes preguntas sobre nuestro proyecto académico, deseas colaborar o necesitas más información sobre la carrera de Arquitectura de Plataformas de Servicios Tecnológicos de la Información en el Instituto Superior Tecnológico Público "Daniel Alcides Carrión", no dudes en ponerte en contacto con nosotros. Estamos disponibles para discutir aspectos técnicos, metodológicos o cualquier consulta relacionada con el desarrollo de este sitio web.</p>
    
    <p>📧 Correo: ejemplo@correo.com</p>
    <p>📱 Teléfono: +51 900 000 000</p>
    <p>📍 Dirección: Lima, Perú</p>

    <h2>Envíanos un mensaje</h2>
    <form id="contact-form">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <label>Correo:</label>
        <input type="email" name="correo" required>

        <label>Mensaje:</label>
        <textarea name="mensaje" required></textarea>

        <button type="submit">Enviar</button>
    </form>
</main>

<footer>
    <p>© 2025 Proyecto Web Colaborativo</p>
</footer>

<script src="js/funciones.js"></script>
</body>
</html>