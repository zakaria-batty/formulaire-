<?php
include("./function/function.php");

$errors = [];
// check if user coming from a request

    //assign variables

    $Nom = htmlentities($_POST['Nom']);
    $Prenom = htmlentities($_POST['Prenom']);
    $Telephone = htmlentities($_POST['Telephone']);
    $Email = htmlentities($_POST['Email']);
    $Nombre_denfants = htmlentities($_POST['Nombre-denfants']);
    $regime = htmlentities($_POST['regime']);
    $tarif = htmlentities($_POST['tarif-consultation']);
    $Medecin = htmlentities($_POST['Medecin']);
    $Ville = htmlentities($_POST['Ville']);
    $Code_postal = htmlentities($_POST['Code-postal']);
    $date_naissance = htmlentities($_POST['date-naissance']);
    $date_effet_contrat = htmlentities($_POST['date-effet-contrat']);

    // check if the portlet is empty

    if (empty($Nom)) :
        $errors = '*veuillez entrer Nom';
    elseif (empty($Prénom)) :
        $errors = '*veuillez entrer Prénom';
    elseif (empty($Téléphone)) :
        $errors = '*veuillez entrer Téléphone';
    elseif (empty($Email)) :
        $errors = '*veuillez entrer Email';
    elseif (empty($Nombre_denfants)) :
        $errors = "*veuillez entrer le Nombre d'enfants";
    elseif (empty($regime)) :
        $errors = "*veuillez entrer régime";
    elseif (empty($tarif)) :
        $errors = "*veuillez entrer le tarif consultation";
    elseif (empty($Médecin)) :
        $errors = "*veuillez entrer Médecin";
    elseif (empty($Ville)) :
        $errors = "*veuillez entrer Ville";
    elseif (empty($Code_postal)) :
        $errors = "*veuillez entrer Code postal";
    elseif (empty($date_naissance)) :
        $errors = "*veuillez entrer le date de naissance";
    elseif (empty($date_effet_contrat)) :
        $errors = "*veuillez entrer le date d'effet contrat";
    else :
        Montant();
    endif;
// }
