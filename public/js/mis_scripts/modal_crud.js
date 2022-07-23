window.addEventListener('DOMContentLoaded', () => {
  $('a[is-modal="true"]').on('click', function (e) {
    e.preventDefault();

    $('#contentModal').load(this.href, function () {
      $('#modalGenerico').modal({ keyboard: true }, 'show');

      crud();
    });

    return false;
  });
});

function crud() {

  //Establecemos una referencia al formulario
  const form = document.querySelector('#myForm');
  configValidator(form);

  form.addEventListener('submit', (e) => {
    //Detenemos el envío de datos al servidor
    e.preventDefault();

    //Capturamos los datos del formulario
    const formdata = new FormData(form);

    //Aquí validaríamos los datos
    const errors = validate(form, constraints);
    showErrors(form, errors || {});

    if (!errors) {
      //Obtenemos la url a la que enviaremos la petición
      const url = form.action;

      fetch(url, { method: 'POST', body: formdata })
        .then(res => res.json())
        .then(data => {
          if (data.success) {
            Swal.fire({
              title: '¡Bien!',
              text: data.message,
              icon: 'success',
              showConfirmButton: true,
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar !',
              timer: 2000
            }).then(() => {
              location.href = data.redirection;
            });
          } else {
            new Error('Error al guardar el producto')
          }
        })
        .catch(error => new Error(error))
    } else {
      showErrors(form, errors || {})
    }
  });

}

function remove(e) {
  const action = e.getAttribute('my-action');
  const name = e.getAttribute('my-name');

  Swal.fire({
    title: 'Eliminar',
    text: "Está seguro de eliminar el registro: " + name + "?",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Sí, elimínalo!'
  }).then((result) => {
    if (result.isConfirmed) {
      fetch(action)
        .then(res => res.json())
        .then(data => {
          if (data.success) {
            Swal.fire({
              title: '¡Eliminado!',
              text: data.message,
              icon: 'success',
              showConfirmButton: true,
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar !',
              timer: 2000
            }).then(() => {
              location.href = data.redirection;
            });
          } else {
            alert('Algo salió mal');
          }
        })
    }
  })
}
















