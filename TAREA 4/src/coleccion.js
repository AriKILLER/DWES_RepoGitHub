/**
 * Clase que representa un libro
 * @class
 * @author Arianna Vilchez Liebanas
 */
class Libro {
    /**
     * Crea un libro
     * @constructor
     * @param {string} titulo - El título del libro
     * @param {string} autor - El autor del libro
     * @param {number} numPaginas - El número de páginas del libro
     */
    constructor(titulo, autor, numPaginas) {
        this.titulo = titulo;
        this.autor = autor;
        this.numPaginas = numPaginas;
    }
}

// Array de libros de ejemplo
let arrayLibros = [];
let libro1 = new Libro("Cien Años de Soledad", "Gabriel García Márquez", 417);
let libro2 = new Libro("1984", "George Orwell", 299);
let libro3 = new Libro("Don Quijote de la Mancha", "Miguel de Cervantes", 863);
let libro4 = new Libro("El principito", "Antoine de Saint-Exupéry", 96);
let libro5 = new Libro("La sombra del viento", "Carlos Ruiz Zafón", 576);

// Agregar libros al array
arrayLibros.push(libro1, libro2, libro3, libro4, libro5);

/**
 * Filtra y devuelve los libros que tienen más de 300 páginas
 * @param {Array<Libro>} coleccion - Array de objetos Libro
 * @returns {Array<string>} Array con los títulos de libros con más de 300 páginas
 */
function librosMasDe300Paginas(coleccion) {
    console.log("Libros con más de 300 paginas:");
    let titulos = [];
    
    for (let libro of coleccion) {
        if (libro.numPaginas > 300) {
            titulos.push(libro.titulo);
            console.log(`- ${libro.titulo} (${libro.numPaginas} paginas)`);
        }
    }
    return titulos;
}
 // Llamada a la función con el array de libros e imprime los libros con más de 300 páginas
librosMasDe300Paginas(arrayLibros);
