$(document).ready(function() {

    var template_html = $('#template').html();
    console.log(template_html);
    var hand_func_template = Handlebars.compile(template_html);

    $.ajax({

        'url' : '/dischi.php',
        'method' : 'GET',
        'success' : function(data) {
            var dati_dischi = data;
            console.log(dati_dischi);
        },
        'error' : function() {
            alert('problema connessione');
        }

    });

});
