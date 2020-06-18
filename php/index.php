<?php require 'dischi.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dischi PHP</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="dist/app.css">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="header-wrapper">
                    <div class="header-right">
                        <img src="img/logo.png" alt="">
                        <img class="logo-write"src="img/logo2.png" alt="">

                    </div>
                    <div class="header-left">
                        <div class="select">
                            <label for="select">Scegli un Autore</label>
                             <select id="select" name="select">
                                 <option selected value="all">Tutti</option>
                                 <?php foreach ($dischi as $disco) {?>
                                     <option value="<?php echo $disco['author'] ?>"><?php echo $disco['author']; ?></option>
                                 <?php } ?>
                             </select>
                        </div>

                    </div>

                </div>

            </div>
        </header>
        <main>
            <div class="container">
                <div class="cd-container">
                    <?php foreach ($dischi as $disco) {?>

                        <div class="cd" data-genere=<?php echo lcfirst($disco['genre']); ?>>
                            <img src="<?php echo $disco['poster']; ?>" alt="immagine cd">
                            <h4><?php echo $disco['title']; ?></h4>
                            <p class="author"> <?php echo $disco['author']; ?>  </p>
                            <span class="year"><?php echo $disco['year']; ?></span>
                        </div>

                    <?php }?>
                </div>
            </div>
        </main>


        <script src="dist/app.js" charset="utf-8"></script>
    </body>
</html>
