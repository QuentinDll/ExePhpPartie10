<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/style.css"/>
        <title>TP 3 Partie 10</title>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="http://exephpp10">Index</a>
                </li>
            </ul>
        </nav>
        <div class="container">
            <?php include 'controler.php'; ?>
            <?php function portrait($array){ ?>
            <p><?php $array['name'] .' '. $array['firstname'] ?></p>
            <img src="<?= $array['portrait'] ?>" alt="portrait d'artiste"/>   
            <p><?php } ?></p>
        </div>
    </body>
</html>
