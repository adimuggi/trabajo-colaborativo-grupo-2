<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<header>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="about.php">Sobre Nosotros</a></li>
            <li><a href="contact.php">Contacto</a></li>
            <li><a class="active" href="register.php">Registro</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>Formulario de Registro</h1>

    <form action="#" method="post">
        <label>Nombre completo:</label>
        <input type="text" name="nombre" required>

        <label>Correo electrónico:</label>
        <input type="email" name="correo" required>

        <label>Contraseña:</label>
        <input type="password" name="pass" required>

        <button type="submit">Registrarse</button>
    </form>
</main>

<footer>
    <p>© 2025 Proyecto Web Colaborativo</p>
</footer>

</body>
</html>