var constraints = {
    tablas: {
        presence: { message: '^Tablas no puede estar vacío' },
        numericality: {
            greaterThanOrEqualTo: 0,
            notGreaterThanOrEqualTo: '^Tablas no puede ser menor que cero'
        }
    }
}