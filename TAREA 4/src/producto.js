/**
 * Función constructora que representa un producto en una tienda
 * @constructor
 * @author Arianna Vilchez Liebanas
 * @param {string} nombre - El nombre del producto
 * @param {number} precio - El precio del producto
 * @param {number} stock - La cantidad en stock
 */
function Producto(nombre, precio, stock) {
    this.nombre = nombre;
    this.precio = precio;
    this.stock = stock;

    /**
     * Aplica un descuento al precio del producto
     * @param {number} descuento - El porcentaje de descuento (0-100)
     * @returns {void}
     */
    this.aplicarDescuento = function(descuento) {
        this.precio = this.precio - (this.precio * descuento / 100);
    }
}

// Ejemplo de uso
const producto1 = new Producto("Zapatillas", 50, 20);
producto1.aplicarDescuento(10);
console.log(producto1);
