console.log("Hola Mundo, desde JavaScript");

document.getElementById("validarEdad").addEventListener("click", function() {

    let fecha = document.getElementById("fechaNacimiento").value;
    let edad = new Date().getFullYear() - new Date(fecha).getFullYear();

    if (fecha === "") {
        document.getElementById("resultadoEdad").textContent = "Ingresa tu fecha";
    } else if (edad >= 18) {
        document.getElementById("resultadoEdad").textContent = "Eres mayor de edad";
    } else {
        document.getElementById("resultadoEdad").textContent = "Eres menor de edad";
    }

});