document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
  Swal.fire({
    title: 'Registro de Lectura',
    text: "Los datos seran ingresados en el sistema!",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Aceptar'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Aceptado!',
        'Los datos han sido ingresados.',
        'success'
      )
    }
  });
});

