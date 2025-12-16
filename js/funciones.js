console.log("Proyecto Web Colaborativo cargado correctamente.");

// Validación del formulario de registro
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(event) {
            const nombre = document.querySelector('input[name="nombre"]');
            const correo = document.querySelector('input[name="correo"]');
            const pass = document.querySelector('input[name="pass"]');

            if (nombre.value.trim() === '') {
                alert('Por favor, ingresa tu nombre completo.');
                event.preventDefault();
                return;
            }

            if (!correo.value.includes('@')) {
                alert('Por favor, ingresa un correo electrónico válido.');
                event.preventDefault();
                return;
            }

            if (pass.value.length < 6) {
                alert('La contraseña debe tener al menos 6 caracteres.');
                event.preventDefault();
                return;
            }
        });
    }

    // Reloj en tiempo real
    const horaSpan = document.getElementById('hora');
    if (horaSpan) {
        function actualizarHora() {
            const ahora = new Date();
            horaSpan.textContent = ahora.toLocaleTimeString();
        }
        actualizarHora();
        setInterval(actualizarHora, 1000);
    }

    // Toggle tema
    const toggleButton = document.getElementById('toggle-theme');
    if (toggleButton) {
        toggleButton.addEventListener('click', function() {
            document.body.classList.toggle('dark');
        });
    }

    // Formulario de contacto
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Mensaje enviado. ¡Gracias por contactarnos!');
            contactForm.reset();
        });
    }
});