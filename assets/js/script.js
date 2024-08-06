// Obtiene el elemento del botón de alternancia por su ID
const toggleButton = document.getElementById('toggleTheme');

// Obtiene el elemento del cuerpo del documento
const bodyElement = document.body;

// Añade un evento de clic al botón de alternancia
toggleButton.addEventListener('click', () => {
    // Alterna la clase 'dark-mode' en el cuerpo del documento
    bodyElement.classList.toggle('dark-mode');
});
