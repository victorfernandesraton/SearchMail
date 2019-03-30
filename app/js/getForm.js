// validando email dessa vez por jquerry
$(document).ready(function() { // ao iniciar o documento...
    $('#mailform').submit(function() { // se realizado envio...
        var mail = $('#mail').val(); // pega o valor do input
        $('#_teste').html(mail); // insere no document
        return false; // para o submit
    });
});