<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/style.css"/>
        <title>TP 1 Partie 10</title>
    </head>
    <body>
        <nav class="navbar sticky-top navbar-dark navbar-brand-center bg-navbarcolor" id="navbar">
            <div class="navbar-header">
                <a class="navbar-brand nav-link col-6" href="#">O</a>
            </div>
        </nav>
        <div class="container">
            <nav class="nav nav-dark bg-navcolor" id="nav">
                <a class="nav-link active" href="http://exephpp10/">Index</a>
            </nav>
            <?php if (!isset($_POST['submit'])) { ?>
                <!--Start Form -->
                <form action="#" method="post" name="formInscrip">
                    <div class="form-row justify-content-center">
                        <!--Start Input Lastname -->
                        <div class="form-group col-10">
                            <label for="inputLastname">Nom : </label>
                            <input type="text" class="form-control" name="lastname" placeholder="Nom"/>
                        </div>
                        <!--End Input Lastname -->
                        <!--Start Input Firstname -->
                        <div class="form-group col-10">
                            <label for="inputFirstname">Prénom : </label>
                            <input type="text" class="form-control" name="firstname" placeholder="Prénom"/>
                        </div>
                        <!--End Input Firstname -->
                        <!--Start Input Date de naissance -->
                        <div class="form-group col-10">
                            <label for="inputBD">Date de naissance : </label>
                            <input type="date" class="form-control" name="birthD" placeholder="Date de naissance"/>
                        </div>
                        <!--End Input Date de naissance -->
                    </div>
                    <div class="form-row justify-content-center">
                        <!--Start Input Pays de naissance -->
                        <div class="form-group col-10">
                            <label for="inputBP">Pays de naissance : </label>
                            <input type="text" class="form-control" name="birthP" placeholder="Pays de naissance"/>
                        </div>
                        <!--End Input Pays de naissance -->
                        <!--Start Input Nationalité -->
                        <div class="form-group col-10">
                            <label for="inputNa">Nationalité : </label>
                            <input type="text" class="form-control" name="natio" placeholder="Nationalité"/>
                        </div>
                        <!--End Input Nationalité -->
                        <!--Start Input Adresse-->
                        <div class="form-group col-10">
                            <label for="inputAddress">Adresse : </label>
                            <input type="text" class="form-control" name="address" placeholder="212 Rue du Guet, Beguot, 32057"/>
                        </div>
                        <!--End Input Adresse -->
                        <!--Start Input Email -->
                        <div class="form-group col-10">
                            <label for="inputEmail">Email : </label>
                            <input type="email" class="form-control" name="email" placeholder="Email"/>
                        </div>
                        <!--End Input Email -->
                        <!--Start Input Téléphone -->
                        <div class="form-group col-10">
                            <label for="inputTel">Téléphone : </label>
                            <input type="tel" class="form-control" name="phone" placeholder="Téléphone"/>
                        </div>
                        <!--End Input Téléphone -->
                    </div>
                    <!--Start Select Level -->
                    <div class="form-row justify-content-center">
                        <div class="form-group col-10">
                            <label for="selectLevel">Diplôme : </label>
                            <select multiple class="form-control" name="level">
                                <option>Sans</option>
                                <option>Bac</option>
                                <option>Bac +2</option>
                                <option>Bac +3</option>
                                <option>Supérieur</option>
                            </select>
                        </div>
                    </div>
                    <!--End Select Level -->
                    <div class="form-row justify-content-center">
                        <!--Start Input Numéro pôle emploi -->
                        <div class="form-group col-10">
                            <label for="inputPE">Numéro pôle emploi : </label>
                            <input type="text" class="form-control" name="poleE" placeholder="Numéro pôle emploi"/>
                        </div>
                        <!--End Input Numéro pôle emploi -->
                        <!--Start Input Nombre de badge -->
                        <div class="form-group col-10">
                            <label for="inputNB">Nombre de badge : </label>
                            <input type="number" class="form-control" name="numbB" placeholder="Nombre de badge"/>
                        </div>
                        <!--End Input Nombre de badge -->
                        <!--Start Input Liens codecademy -->
                        <div class="form-group col-10">
                            <label for="inputCo">Liens codecademy : </label>
                            <input type="url" class="form-control" name="linkCo" placeholder="Liens codecademy"/>
                        </div>
                        <!--End Input Liens codecademy -->
                        <!--Start Textarea SuperHéro -->
                        <div class="form-group col-10">
                            <label for="textareaSP">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi? : </label>
                            <textarea class="form-control" name="superH" placeholder="Ex : Batman , Superman , Ironman , Captaine Marvel ..." rows = "4"></textarea>
                        </div>
                        <!--End Textarea SuperHéro -->
                        <!--Start Textarea Hacks -->
                        <div class="form-group col-10">
                            <label for="textareaH">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) : </label>
                            <textarea class="form-control" name="hack" rows="4"></textarea>
                        </div>
                        <!--End Textarea Hacks -->
                    </div>
                    <!--Start Radio Exp -->
                    <div class="form-row justify-content-center">
                        <!--Start Radio Yes/No Exp -->
                        <fieldset class="form-group" name="exp">
                            <label class="col-form-label">
                                Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?
                            </label>
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radExp1" id="radExp1" value="option1"/>
                                        <label class="form-check-label" for="radExp1">Oui</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radExp2" id="radExp2" value="option2"/>
                                        <label class="form-check-label" for="radExp2">Non</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <!-- End Radio Yes/No Exp -->
                    </div>
                    <!-- End Radio Exp -->
                    <button type="submit" name="submit" class="btn btn-secondary" id="btn">Envoyer</button>
                <?php } else {
                    ?><p><?php
                        // si l'input n'est pas vides
                        if (!empty($_POST['lastname'])) {
                            // si 
                            if (preg_match('/^[a-zA-Z \-\']+$/', $_POST['lastname'])) {
                                ?>Nom : <?= $_POST['lastname']; ?>
                            <?php } else { ?><?= 'Erreur du nom'; ?><?php
                            }
                        }
                        ?></p>
                    <p><?php
                        // verif input firstname
                        if (!empty($_POST['firstname'])) {
                            if (preg_match('/^[a-zA-Z \-\']+$/', $_POST['firstname'])) {
                                ?>Prénom : <?= $_POST['firstname']; ?>
                            <?php } else { ?><?= 'Erreur du prénom'; ?><?php
                            }
                        }
                        ?></p>
                    <p><?php
                        // verif input birthday
                        if (!empty($_POST['birthD'])) {
                            ?>Date de naissance : <?= $_POST['birthD']; ?>
                        <?php } else { ?><?= 'Erreur de la date de naissance'; ?><?php
                        }
                        ?></p>
                    <p><?php
                        // verif input pays de naissance
                        if (!empty($_POST['birthP'])) {
                            if (preg_match('/^[a-zA-Z \-\']+$/', $_POST['birthP'])) {
                                ?>Pays de naissance : <?= $_POST['birthP']; ?>
                            <?php } else { ?><?= 'Erreur du pays de naissance'; ?><?php
                            }
                        }
                        ?></p>
                    <p><?php
                        // verif input nationalité
                        if (!empty($_POST['natio'])) {
                            if (preg_match('/^[a-zA-Z \-\']+$/', $_POST['natio'])) {
                                ?>Nationalités : <?= $_POST['natio']; ?>
                            <?php } else { ?><?= 'Erreur de la nationalité'; ?><?php
                            }
                        }
                        ?></p>        
                    <p><?php
                        // verif input addresse
                        if (!empty($_POST['address'])) {
                            if (preg_match('/^[a-zA-Z \d \-\'\.\,\/]+$/', $_POST['address'])) {
                                ?>Addresse : <?= $_POST['address']; ?>
                            <?php } else { ?><?= 'Erreur de l\'addresse'; ?><?php
                            }
                        }
                        ?></p>
                    <p><?php
                        // verif input email
                        if (!empty($_POST['email'])) {
                            if (preg_match('/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/', $_POST['email'])) {
                                ?>Email : <?= $_POST['email']; ?>
                            <?php } else { ?><?= 'Erreur de l\'email'; ?><?php
                            }
                        }
                        ?></p>
                    <p><?php
                        // verif input tel
                        if (!empty($_POST['phone'])) {
                            if (preg_match('/^[0-9]{10}$/', $_POST['phone'])) {
                                ?>Numéro de Téléphone : <?= $_POST['phone']; ?>
                            <?php } else { ?><?= 'Erreur du numéro de téléphone'; ?><?php
                            }
                        }
                        ?></p>
                    <p><?php
                        // verif select level
                        if (!empty($_POST['level'])) {
                            ?>Diplôme : <?= $_POST['level']; ?>
                        <?php } else { ?><?= 'Erreur du niveau'; ?><?php
                        }
                        ?></p>
                    <p><?php
                        // verif input pole emploi
                        if (!empty($_POST['poleE'])) {
                            ?>Numéro pôle emploi : <?= $_POST['poleE']; ?>
                        <?php } else { ?><?= 'Erreur du numéro Pole Emploi'; ?><?php
                        }
                        ?></p>
                    <p><?php
                        // verif input nombre de badge
                        if (!empty($_POST['numbB'])) {
                            ?>Nombre de badge : <?= $_POST['numbB']; ?>
                        <?php } else { ?><?= 'Erreur du nombre de badge'; ?><?php
                        }
                        ?></p>
                    <p><?php
                        // verif input liens codeacademy
                        if (!empty($_POST['linkCo'])) {
                            if (preg_match('/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/', $_POST['linkCo'])) {
                                ?>Liens Codeacademy : <?= $_POST['linkCo']; ?>
                            <?php } else { ?><?= 'Erreur du lien'; ?><?php
                            }
                        }
                        ?></p>
                    <p><?php
                        // verif textarea super hero
                        if (!empty($_POST['superH'])) {
                            ?>Votre super héros : <?= $_POST['superH']; ?>
                        <?php } else { ?><?= 'Erreur du super héros'; ?><?php
                        }
                        ?></p>
                    <p><?php
                        // verif textarea hacks
                        if (!empty($_POST['hack'])) {
                            ?>Vos hacks : <?= $_POST['hack']; ?>
                        <?php } else { ?><?= 'Erreur des hacks'; ?><?php }
                        ?></p>
                    <p><?php
                        // verif exp
                        if (isset($_POST['exp'])) {
                            ?>
                            <?php if (isset($_POST['radExp1'])) { ?>Votre Exp : Oui<?php } ?>
                            <?php if (isset($_POST['radExp2'])) { ?>Votre Exp : Non<?php } ?>
                        <?php } else { ?>Erreur de l'Exp<?php } ?>
                    </p>
                </form>
                <!-- End Form -->
            <?php } ?>
        </div>
    </body>
</html>
