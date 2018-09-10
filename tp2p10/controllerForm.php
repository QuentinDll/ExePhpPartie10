<?php
//Déclaration regex nom
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
// déclaration des variables 
$gender = $_POST['gender'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$age = $_POST['age'];
$society = $_POST['society'];

// verif select gender
if (!empty($gender)) {
    if ($gender == '0' || $gender == '1' || $gender == '2') {
        echo $gender;
    } else {
        echo 'Erreur de Civilité';
    }
} else {
    echo 'Veuillez selectionner une cvilité';
}
?>
<?php
// verif input lastname
if (!empty($lastname)) {
    if (preg_match('/^[a-zA-Z \-\']+$/', $lastname)) {
        ?>Nom : <?= $lastname; ?>
    <?php } else { ?>Erreur de nom?><?php
    }
}
?>
<?php
// verif input firstname
if (!empty($firstname)) {
    if (preg_match('/^[a-zA-Z \-\']+$/', $firstname)) {
        ?>Prénom : <?= $firstname; ?>
    <?php } else { ?>Erreur de prénom<?php
    }
}
?>
<?php
// verif input age
if (!empty($age)) {
    if (preg_match('/^[\d]+$/', $age)) {
        ?>Age : <?= $age; ?>
    <?php } else { ?>Erreur de l'age<?php
    }
}
?>
<?php
// verif input society
if (!empty($society)) {
    ?>Société : <?= $society; ?>
<?php } else { ?>Erreur de Société<?php
}
?>