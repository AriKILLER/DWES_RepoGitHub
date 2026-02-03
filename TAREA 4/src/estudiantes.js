/**
 * Ordena una lista de estudiantes por promedio (ascendente) y en caso de empate por edad (ascendente)
 * @param {Array<Object>} estudiantes - Array de objetos estudiante
 * @param {string} estudiantes[].nombre - Nombre del estudiante
 * @param {number} estudiantes[].edad - Edad del estudiante
 * @param {number} estudiantes[].promedio - Promedio del estudiante
 * @returns {Array<Object>} Array de estudiantes ordenado
 * @author Arianna Vilchez Liebanas
 */
function ordenarEstudiantes(estudiantes) {
    return estudiantes.sort((a, b) => {
        // Primero ordenar por promedio (ascendente)
        if (a.promedio !== b.promedio) {
            return a.promedio - b.promedio;
        }
        // En caso de empate, ordenar por edad (ascendente)
        return a.edad - b.edad;
    });
}

// Array de estudiantes de ejemplo
let estudiantes = [
    {nombre: "Arianna", edad: 20, promedio: 8.5},
    {nombre: "Bruno", edad: 22, promedio: 8.0},
    {nombre: "Jaime", edad: 20, promedio: 9.9},
    {nombre: "Lucia", edad: 19, promedio: 8.0},
];

// Mostrar lista original
console.log("Lista original: ");
// Recorremos e imprimimos cada estudiante
estudiantes.forEach(e => console.log(`${e.nombre} - Edad: ${e.edad}, Promedio: ${e.promedio}`));

// Estudiantes ordenados
let estudiantesOrdenados = ordenarEstudiantes(estudiantes);

console.log("\nLista ordenada (por promedio, luego por edad):");
// Recorremos e imprimimos cada estudiante ordenado
estudiantesOrdenados.forEach(e => console.log(`${e.nombre} - Edad: ${e.edad}, Promedio: ${e.promedio}`));
