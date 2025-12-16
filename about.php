<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sobre Nosotros</title>
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        body {
            background-color: #f3e5f5;
            color: #148c38ff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #e14a4aff;
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
            color: #2e1b9aff;
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
            background-color: #311b92;
            color: #e8eaf6;
        }
        .dark header {
            background-color: #4527a0;
        }
        .dark nav a {
            color: #e8eaf6;
        }
        .dark nav a:hover, .dark nav a.active {
            color: #ffeb3b;
        }
        .dark main h1 {
            color: #ba68c8;
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
            <li><a class="active" href="about.php">Sobre Nosotros</a></li>
            <li><a href="contac.php">Contacto</a></li>
            <li><a href="register.php">Registro</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>Sobre el Proyecto</h1>
    <p>Este proyecto forma parte del currículo de la carrera de Arquitectura de Plataformas de Servicios Tecnológicos de la Información en el Instituto Superior Tecnológico Público "Daniel Alcides Carrión". El objetivo principal es desarrollar habilidades en el diseño y desarrollo de aplicaciones web colaborativas, utilizando herramientas modernas de control de versiones como GitHub.</p>
    
    <h2>Introducción</h2>
    <p>En el contexto de la educación superior tecnológica, este trabajo práctico busca integrar conocimientos teóricos con aplicaciones reales. Los estudiantes aplican principios de arquitectura de plataformas, diseño de interfaces, y gestión de proyectos colaborativos para crear una página web funcional que sirva como portafolio de habilidades adquiridas.</p>
    
    <h2>Objetivos del Proyecto</h2>
    <ul>
        <li>Desarrollar una página web estática utilizando tecnologías como HTML, CSS, JavaScript y PHP.</li>
        <li>Fomentar el trabajo en equipo y la colaboración mediante el uso de repositorios Git.</li>
        <li>Aplicar buenas prácticas en el diseño de interfaces de usuario y experiencia de usuario.</li>
        <li>Demostrar competencias en la gestión de versiones y resolución de conflictos en entornos colaborativos.</li>
        <li>Presentar un producto final que refleje el aprendizaje adquirido en la carrera.</li>
    </ul>
    
    <h2>Integrantes del Equipo</h2>
    <p>El proyecto fue desarrollado por un equipo de cuatro estudiantes de la carrera de Arquitectura de Plataformas de Servicios Tecnológicos de la Información:</p>
    <ol>
        <li><strong>Aldair Adilson Muggi Pulido</strong> - Responsable de la página principal y coordinación general.</li>
        <li><strong>Ludim Rivas Livia</strong> - Desarrollo de la página "Sobre Nosotros" y documentación.</li>
        <li><strong>Yanet Echevarría Malpartida</strong> - Implementación del formulario de contacto y validaciones.</li>
        <li><strong>Katy Bautista Saturno</strong> - Diseño del formulario de registro y estilos CSS.</li>
    </ol>
    
    <h2>Metodología</h2>
    <p>El desarrollo se realizó de manera colaborativa utilizando GitHub como plataforma de control de versiones. Cada integrante contribuyó con módulos específicos, siguiendo un flujo de trabajo que incluye la creación de ramas, revisiones de código y fusiones controladas. Esta metodología asegura la calidad del código y promueve el aprendizaje continuo.</p>
    
    <h2>Conclusión</h2>
    <p>Este proyecto no solo cumple con los requisitos académicos, sino que también prepara a los estudiantes para entornos profesionales donde la colaboración y el uso de herramientas tecnológicas son esenciales. A través de este trabajo, se refuerzan conceptos clave en la arquitectura de plataformas de información y se fomenta la innovación en el desarrollo de servicios tecnológicos.</p>
</main>

<footer>
    <p>© 2025 Proyecto Web Colaborativo</p>
</footer>

<script src="js/funciones.js"></script>
</body>
</html>