<?php require 'dischi.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dischi PHP</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="dist/app.css">
    </head>
    <body>
        <header>

        </header>
        <main>
            <div class="container">
                <?php foreach ($dischi as $disco) {?>

                    <div class="cd" data-genere=<?php echo lcfirst($disco['genre']); ?>>
                        <img src="<?php echo $disco['poster']; ?>" alt="immagine cd">
                        <h3><?php echo $disco['title']; ?></h3>
                        <span class="author"> <?php echo $disco['author']; ?>  </span>
                        <span class="year"><?php echo $disco['year']; ?></span>
                    </div>

                <?php }?>

            </div>
        </main>


        <script src="dist/app.js" charset="utf-8"></script>
    </body>
</html>
