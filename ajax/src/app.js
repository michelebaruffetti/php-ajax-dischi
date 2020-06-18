$(document).ready(function() {

    var template_html = $('#template').html();
    var template_option = $('#template1').html();

    var hand_func_template = Handlebars.compile(template_html);
    var hand_option_template = Handlebars.compile(template_option);

    $.ajax({

        'url' : 'dischi.php',
        'method' : 'GET',
        'success' : function(data) {
            var dati_dischi = data;
            console.log(dati_dischi);

            for (var i = 0; i < dati_dischi.length; i++) {
                var disco = dati_dischi[i];

                var dati_disco = {
                    'genere' : disco.genre.toLowerCase(),
                    'poster' : disco.poster,
                    'titolo' : disco.title,
                    'autore' : disco.author,
                    'anno'   : disco.year
                };

                var dati_select = { 'autore': disco.author};

                var html_handl_final = hand_func_template(dati_disco);

                var html_handl_option = hand_option_template(dati_select);

                $('.cd-container').append(html_handl_final);

                $('#select').append(html_handl_option);
            }

        },
        'error' : function() {
            alert('problema connessione');
        }

    });

});
