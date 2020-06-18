$(document).ready(function() {

    var template_html = $('#template').html();

    var hand_func_template = Handlebars.compile(template_html);

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

                var html_handl_final = hand_func_template(dati_disco);

                $('.cd-container').append(html_handl_final);
            }

        },
        'error' : function() {
            alert('problema connessione');
        }

    });

});
