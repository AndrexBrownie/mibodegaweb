var constraints = {
    nombres: {
        presence: true,
        length: {
            minimum: 5,
            maximum: 30,
            message: '^Nombre debe poseer entre 5 y 30 caracteres'
        }
    },
    apellidos: {
        presence: true,
        length: {
            minimum: 5,
            maximum: 30,
            message: '^Nombre debe poseer entre 5 y 30 caracteres'
        }
    },
    direccion: {
        presence: true,
        length: {
            minimum: 5,
            maximum: 30,
            message: '^Dirección debe poseer entre 5 y 30 caracteres'
        }
    },
    ubicacion: {
        presence: true,
        length: {
            minimum: 5,
            maximum: 30,
            message: '^Ubicación debe poseer entre 5 y 30 caracteres'
        }
    },
    telefono: {
        presence: { message: '^Telefono no puede estar vacío' },
        numericality: {
            greaterThanOrEqualTo: 0,
            notGreaterThanOrEqualTo: '^Telefono no puede ser menor que cero'
        }
    },
    dni: {
        presence: { message: '^DNI no puede estar vacío' },
        numericality: {
            greaterThanOrEqualTo: 0,
            notGreaterThanOrEqualTo: '^DNI no puede ser menor que cero'
        }
    },
    nacimiento: {
        presence: { message: '^Seleccione una fecha' }
    }
}