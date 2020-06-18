

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dischi Ajax</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="dist/app.css">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="header-right">
                    <img src="img/logo.png" alt="">
                    <img class="logo-write"src="img/logo2.png" alt="">

                </div>

            </div>
        </header>
        <main>
            <div class="container">
                <div class="cd-container">

                </div>
            </div>
        </main>

        <script id="template" type="handlebars-template">

            <div class="cd" data-genere="{{genere}}">
                <img src="{{poster}}" alt="immagine cd">
                <h4>{{titolo}}</h4>
                <p class="author">{{autore}}</p>
                <span class="year">{{anno}}</span>
            </div>
        </script>
        <script src="dist/app.js" charset="utf-8"></script>
    </body>
</html>
