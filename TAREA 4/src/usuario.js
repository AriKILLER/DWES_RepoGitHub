/**
 * Valida si un valor es un número entero positivo
 * @author Arianna Vilchez Liebanas
 * @param {*} n - El valor a validar
 * @returns {boolean} true si es un número entero positivo, false en caso contrario
 */
function esEntero(n) {
    if (n === null || n === "" || isNaN(n) || !Number.isInteger(Number(n)) || Number(n) <= 0) {
        return false;
    }
    return true;
}

/**
 * Solicita al usuario un número entero positivo para el tamaño del array
 * Valida la entrada y repite la solicitud hasta obtener un valor válido
 */
let n;
let inputN;
do {
    inputN = prompt("Introduce un número entero positivo para el tamaño del array:");
    n = Number(inputN);
    
    if (!esEntero(inputN)) {
        alert("Error: Debes introducir un número entero positivo mayor que 0");
    }
} while (!esEntero(inputN));

/**
 * Array que almacena los números enteros introducidos por el usuario
 * @type {Array<number>}
 */
let arrayNumeros = [];

/**
 * Solicita N números enteros positivos al usuario
 * Valida cada entrada y la añade al array
 */
for (let i = 0; i < n; i++) {
    let inputNumero;
    let numero;
    do {
        inputNumero = prompt(`Introduce el número ${i + 1} de ${n} (entero positivo):`);
        numero = Number(inputNumero);
        if (!esEntero(inputNumero)) {
            alert("Error: Debes introducir un número entero positivo mayor que 0");
        }
    } while (!esEntero(inputNumero));
    arrayNumeros.push(numero);
}

console.log("Array completado:", arrayNumeros);
alert("Array completado: " + arrayNumeros.join(", "));

// Ordenar el array de forma ascendente
arrayNumeros.sort((a, b) => a - b);

console.log("Array ordenado:", arrayNumeros);
alert("Array ordenado: " + arrayNumeros.join(", "));
