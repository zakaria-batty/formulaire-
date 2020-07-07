<?php
function dmc_insert($connect, $values = array())
{
}
function redirect($page)
{
    header('location:' . $page);
}
$errors = [];
$message = "";
// check formule domande conge
if (isset($_POST['compare'])) :
    // check the information
    $Nom = htmlentities($_POST['Nom']);
    $Prénom = htmlentities($_POST['Prénom']);
    $Téléphone = htmlentities($_POST['Téléphone']);
    $Email = htmlentities($_POST['Email']);
    $Nombre_denfants = htmlentities($_POST['Nombre-denfants']);
    $regime = htmlentities($_POST['regime']);
    $tarif_consultation = htmlentities($_POST['tarif-consultation']);
    $Médecin = htmlentities($_POST['Médecin']);
    $Ville = htmlentities($_POST['Ville']);
    $Code_postal = htmlentities($_POST['Code-postal']);
    $date_naissance = htmlentities($_POST['date-naissance']);
    $date_effet_contrat = htmlentities($_POST['date-effet-contrat']);
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
    elseif (empty($tarif_consultation)) :
        $errors = "*veuillez entrer le tarif consultation";
    elseif (empty($Médecin)) :
        $errors = "*veuillez entrer Médecin";
    elseif (empty($Ville)) :
        $errors = "*veuillez entrer Ville";
    elseif (empty($Code_postal)) :
        $errors = "*veuillez entrer Code postal";
    elseif (empty( $date_naissance)) :
        $errors = "*veuillez entrer le date de naissance";
    elseif (empty($date_effet_contrat)) :
        $errors = "*veuillez entrer le date d'effet contrat";
    else :
        // $values = array(
        //     'date_début' => $date_début,
        //     'date_fin' => $date_fin,
        //     'durée' => $durée,
        //     'id_employe' => $id,
        //     'id_type_conge' => $id_typeConge,
        //     'id_service' => $id_sérvice,
        //     'demande' => $demande,
        // );
        // //submit information
        // if (dmc_insert($connect, $values) === true) :
        //     redirect('voirconge.php?message=envoyez');
        // else :
            $message = '*Une demande de congé a été refuse';
        // endif;
    endif;
endif;
