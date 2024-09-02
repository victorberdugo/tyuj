// scripts.js

// Función para manejar el envío del formulario
document.getElementById('payment-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Aquí puedes agregar validación del formulario o lógica adicional
    console.log('Formulario enviado');
    
    // Enviar el formulario al servidor
    this.submit(); // Enviar el formulario al archivo PHP
});
