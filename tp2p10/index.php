<?php include 'controllerForm.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/style.css"/>
        <title>TP 2 Partie 10</title>
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
            <h1>Inscription : </h1>
            <div class="row" id="form-container">
                <div class="col left-half" id="question">
                    <form action="#" method="post">
                        <div class="form-group" id="select-gender">
                            <label for="gender">Civilité : </label>
                            <select class="form-control" name="gender" id="select-gender">
                                <option selected disabled>Choisir une civilité</option>
                                <option value="0" <?php  ?>>Monsieur</option>
                                <option value="1">Madame</option>
                                <option value="2">Autre</option>
                            </select>
                        </div>
                        <div class="form-group" id="inpt-lastname">
                            <label for="lastname">Nom : </label><input type="text" name="lastname" class="form-control" placeholder="Nom" value="<?= !empty($_POST['lastname']) ? $_POST['lastname'] : null; ?>"/>
                        </div>
                        <div class="form-group" id="inpt-firstname">
                            <label for="firstname">Prénom : </label><input type="text" name="firstname" class="form-control" placeholder="Prénom" value="<?= !empty($_POST['firstname']) ? $_POST['firstname'] : null; ?>"/>
                        </div>

                        <div class="form-group" id="inpt-age">
                            <label for="age">Age : </label><input type="text" name="age" class="form-control" placeholder="Age" value="<?= !empty($_POST['age']) ? $_POST['age'] : null; ?>"/>
                        </div>
                        <div class="form-group" id="inpt-society">
                            <label for="society">Société : </label><input type="text" name="society" class="form-control" placeholder="Société" value="<?= !empty($_POST['society']) ? $_POST['society'] : null; ?>"/>
                        </div>
                        <div class="form-group" id="btn">
                            <button type="submit" name="submit" class="form-control-sm btn btn-primary mb-2">Show</button>
                        </div>    
                    </form>
                </div>
                <div class="col right-half" id="anwser">
                    <?php if (isset($_POST['submit'])) { ?>
                    <p><?= $_POST['gender']; ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </body>
</html>
