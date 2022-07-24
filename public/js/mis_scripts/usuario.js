var constraints = {
    usuario: {
        presence: true,
        length: {
            minimum: 5,
            maximum: 30,
            message: '^Nombre debe poseer entre 5 y 30 caracteres'
        }
    },
    clave: {
        presence: true,
        length: {
            minimum: 8,
            maximum: 30,
            message: '^Nombre debe poseer entre 8 y 30 caracteres'
        }
    },
    correo: {
        presence: true,
        email: true
    }
}