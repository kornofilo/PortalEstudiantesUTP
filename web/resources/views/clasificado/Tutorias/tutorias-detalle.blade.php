<!-- Script para que el modal que presenta los detalles de las Tutorías publicadas funcione de manera dinámica -->
<script>
//Específicamos el modal de los detalles de la tutoría
$('#tutoriaDetalle').on('show.bs.modal', function (event) {
  //Específicamos el elemento que actua como disparador del modal.
  var button = $(event.relatedTarget);
  //Campo de título de Tutoría
  var titulo =  button.data('titulo');
  var modal = $(this)
  modal.find('.modal-body #titulo').val(titulo);
})
</script>