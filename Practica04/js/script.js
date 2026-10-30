
// Muestra un mensaje en la consola.
console.log("Hola Mundo, desde JavaScript");

// Detecta cuando cambia la fecha.
document.getElementById("fechaNacimiento").addEventListener("change", function() {

    // Obtiene la fecha seleccionada.
    let fecha = this.value;

    // Calcula la edad.
    let edad = new Date().getFullYear() - new Date(fecha).getFullYear();

    // Obtiene el cuadro del resultado.
    let resultado = document.getElementById("resultadoEdad");

    // Comprueba si es mayor o menor de edad.
    if (edad >= 18) {
        resultado.textContent = "Tienes " + edad + " años. Eres mayor de edad";
        resultado.style.color = "green";
    } else {
        resultado.textContent = "Tienes " + edad + " años. Eres menor de edad";
        resultado.style.color = "red";
    }

});