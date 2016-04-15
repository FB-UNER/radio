/**
 * Created by jparra on 14/04/2016.
 */

$('#_contacto').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    var email = 'jparra@fb.uner.edu.ar';
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Enviar Mensaje a  ' + recipient)
    modal.find('.modal-body input').val(email)
})
