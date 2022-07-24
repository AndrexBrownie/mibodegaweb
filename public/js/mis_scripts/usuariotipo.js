var constraints = {
    nombre: {
        presence: true,
        length: {
            minimum: 5,
            maximum: 30,
            message: '^Nombre debe poseer entre 5 y 30 caracteres'
        }
    }
}