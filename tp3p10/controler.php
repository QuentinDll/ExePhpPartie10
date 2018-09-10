<?php

$portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

portrait($portrait1);
portrait($portrait2);
portrait($portrait3);
portrait($portrait4);

function displayArray($portrait ){
    
}


/*
<label><? = ($portrait1['name']) . ' ' . ($portrait1['firstname']);
?></label>
<div><img src="<?php print_r($portrait1['portrait']); ?>" alt="portrait"></div>

<label><?= ($portrait2['name']) . ' ' . ($portrait2['firstname']); ?></label>
<div><img src="<?php print_r($portrait2['portrait']); ?>" alt="portrait"></div>

<label><?= ($portrait3['name']) . ' ' . ($portrait3['firstname']); ?></label>
<div><img src="<?php print_r($portrait3['portrait']); ?>" alt="portrait"></div>

<label><?= ($portrait4['name']) . ' ' . ($portrait4['firstname']); ?></label>
<div><img src="<?php print_r($portrait4['portrait']); ?>" alt="portrait"></div>
 */