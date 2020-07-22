<?php

function condition()
{
    global $sum;
    // A function for calculating age
    $date = $_POST['date-naissance'];
    $today = date("d-m-Y");
    $diff = date_diff(date_create($date), date_create($today));
    $age = $diff->format('%y');

    $N_grosses = $_POST['N-grosses'];
    $accouche = isset($_POST['accouche']) ? $_POST['accouche'] : NULL;

    if ($_POST["Medecin-A"]) :
        if ($age >= 18 || $N_grosses >= 6 || $accouche == "Oui") :
            $sum--;
        endif;
    elseif ($_POST["Medecin-B"]) :
        $sum--;
    elseif ($_POST["Medecin-C"]) :
        $sum--;
    elseif ($_POST["Medecin-II"]) :
        $sum--;
    endif;
}

// function for calculation of refund amount
function Montant()
{
    global $sum;
    // variables
    $MontantRembourse_II = 23 * 70 / 100;
    $MontantRembourse_I30 = 23 * 30 / 100;
    $MontantRembourse_A = 25 * 70 / 100;
    $MontantRembourse_30 = 25 * 30 / 100;
    $MontantRembourse_D = 30 * 70 / 100;
    $MontantRembourse_C = 39.00 * 70 / 100;
    $MontantRembourse_C30 = 39.00 * 30 / 100;
    $MontantRembourse_B = 41.70 * 70 / 100;
    $MontantRembourse_B30 = 41.70 * 30 / 100;
    $MontantRembourse_III = 46.70 * 70 / 100;
    $MontantRembourse = 46.00 * 70 / 100;
    $MontantRembourse_E = 47.73 * 70 / 100;
    $MontantRembourse_E30 = 47.73 * 30 / 100;
    $MontantRembourse_IV = 51 * 70 / 100;
    $MontantRembourse_1 = 57.50 * 70 / 100;

    // Coditions for choosing doctors
    switch ($_POST['Medecin-A']) {
        case 'Généraliste secteur 1':
        case 'Généraliste secteur 2':
        case 'Spécialiste secteur 1':
        case 'Spécialiste secteur 2':
            $sum = $MontantRembourse_A;
            break;
        case 'Psychiatre secteur 1':
            $sum = $MontantRembourse_B;
            break;
        case 'Psychiatre secteur 2':
            $sum =  $MontantRembourse_C;
            break;
        default:
            break;
    }

    // Coditions for choosing doctors
    switch ($_POST['Medecin-B']) {
        case 'Généraliste secteur 1':
        case 'Spécialiste secteur 1':
            $sum = $MontantRembourse_D;
            break;
        case 'Généraliste secteur 2':
        case 'Spécialiste secteur 2':
            $sum = $MontantRembourse_II;
            break;
        case 'Psychiatre secteur 1':
            $sum = $MontantRembourse_III;
            break;
        case 'Psychiatre secteur 2':
            $sum = $MontantRembourse_C;
            break;
        case 'Cardioloque secteur 1':
            $sum = $MontantRembourse_IV;
            break;
        case 'Cardioloque secteur 2':
            $sum = $MontantRembourse_E;
            break;
        default:
            break;
    }

    // Coditions for choosing doctors
    switch ($_POST['Medecin-C']) {
        case 'Spécialiste secteur 1':
        case 'Spécialiste secteur 2':
            $sum = $MontantRembourse;
            break;
        case 'Psychiatre secteur 1':
        case 'Psychiatre secteur 2':
            $sum = $MontantRembourse_1;
            break;
        default:
            break;
    }

    // Coditions for choosing doctors
    switch ($_POST['Medecin-II']) {
        case 'Généraliste secteur 1':
        case 'Spécialiste secteur 1':
            $sum = $MontantRembourse_30;
            break;
        case 'Généraliste secteur 2':
        case 'Spécialiste secteur 2':
            $sum = $MontantRembourse_I30;
            break;
        case 'Psychiatre secteur 1':
            $sum = $$MontantRembourse_B30;
            break;
        case 'Psychiatre secteur 2':
            $sum = $MontantRembourse_C30;
            break;
        case 'Cardioloque secteur 2':
        case 'Cardioloque secteur 2':
            $sum = $MontantRembourse_E30;
            break;

        default:
            break;
    }

    condition();
    echo $sum;
    // var_dump($_POST);
}

// function for calculation total
function total()
{
    global $sum;

    $tarif = $_POST['tarif-consultation'];
    $sum1 = $tarif - $sum;

    echo  $sum1;
}
