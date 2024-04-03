document.getElementById('loginForm').addEventListener('submit', function (event) {
    event.preventDefault();
    // Aquí puedes agregar la lógica de validación y autenticación
    var email = document.getElementById('inputEmail').value;
    var password = document.getElementById('inputPassword').value;
    // Validar email y contraseña
    if (email === '' || password === '') {
        alert('Por favor, completa todos los campos.');
    } else {
        // Procesar el login
        console.log('Login exitoso');
    }
});
