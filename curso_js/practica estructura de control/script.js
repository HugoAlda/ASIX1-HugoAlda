var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];

var dni = prompt("Por favor, ingresa los numeros de tu DNI:");

var letra = prompt("Por favor, ingresa la letra de tu DNI:");

var resultado = parseInt(dni) % 23;

var letradni = letras[resultado];

if (letra.toUpperCase() === letradni) {
    alert("La letra coincide con los numeros del DNI. Tu DNI es valido.");
} else {
    alert("La letra NO coincide con los numeros del DNI. Tu DNI no es valido.");
}