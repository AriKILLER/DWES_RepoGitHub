/**
 * Función constructora para crear un objeto Smartphone
 * @author Arianna Vilchez Liebanas
 * @constructor
 * @param {string} marca - La marca del smartphone
 * @param {string} modelo - El modelo del smartphone
 * @param {string} color - El color del smartphone
 * @param {number} tamaño - El tamaño de la pantalla en pulgadas
 */
function Smartphone(marca, modelo, color, tamaño) {
    this.marca = marca;
    this.modelo = modelo;
    this.color = color;
    this.tamaño = tamaño;

    /**
     * Instala una aplicación en el smartphone
     * @param {string} apli - El nombre de la aplicación a instalar
     * @returns {void}
     */
    this.instalarAplicacion = function(apli) {
        console.log("Aplicacion " + apli + " instalada con exito en smartphone " + this.marca + " " + this.modelo);
    }

    /**
     * Envía un correo electrónico
     * @param {string} mensa - El mensaje del correo a enviar
     * @returns {void}
     */
    this.enviarCorreo = function(mensa) {
        console.log("Mensaje: " + mensa + " enviado con exito");
    }

    /**
     * Realiza una llamada telefónica
     * @param {string} num - El número de teléfono a llamar
     * @returns {void}
     */
    this.llamar = function(num) {
        console.log("Llamando al " + num + " ...desde mi smartphone con tamaño " + this.tamaño + " pulgadas");
    }
}

/**
 * Método añadido mediante el patron prototipo que muestra todos los datos del smartphone
 * @returns {void}
 */
Smartphone.prototype.obtenDatosSmartPhone = function() {
    let datos = "Datos del Smartphone: \n" +
                "Marca: " + this.marca + "\n" +
                "Modelo: " + this.modelo + "\n" +
                "Color: " + this.color + "\n" +
                "Tamaño: " + this.tamaño + " pulgadas";
    console.log(datos);
}

// Ejemplo de uso
let smartphone1 = new Smartphone("Xiaomi", "Redmi Note 13", "Azul", 6.60);
smartphone1.instalarAplicacion("Clash Royale");
smartphone1.enviarCorreo("Hola, como estas?");
smartphone1.llamar("1234567890");

// Usar el nuevo metodo añadido con el patron prototipo
smartphone1.obtenDatosSmartPhone();
