// Muestra un mensaje en la consola del navegador.
console.log("Hola Mundo, desde JavaScript");

// Detecta cuando el usuario selecciona una fecha de nacimiento.
document.getElementById("fechaNacimiento").addEventListener("change", function() {

    // Obtiene la fecha que ingresó el usuario.
    let fecha = this.value;

    // Calcula la edad restando los años.
    let edad = new Date().getFullYear() - new Date(fecha).getFullYear();

    // Comprueba si la persona tiene 18 años o más.
    if (edad >= 18) {

        // Muestra que es mayor de edad.
        document.getElementById("resultadoEdad").textContent = "Eres mayor de edad";

    } else {

        // Muestra que es menor de edad.
        document.getElementById("resultadoEdad").textContent = "Eres menor de edad";
    }

});