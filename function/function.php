<?php

// function for calculation of refund amount
function compute()
{

    // A function for calculating age
    $date_naissance = $_POST['date-naissance'];
    $today = date("m-d-Y");
    $diff = date_diff(date_create($date_naissance), date_create($today));
    $age =  $diff->format('%y');

    // variables
    $Montant_remboursé = 25 * 70 / 100;
    $Psychiatre_1 = 41.70 * 70 / 100;
    $Psychiatre_2 = 39.00 * 70 / 100;

    // Coditions for choosing doctors
    switch ($_POST['Médecin']) {
        case 'Généraliste secteur 1':
        case 'Généraliste secteur 2':
        case 'Spécialiste secteur 1':
        case 'Spécialiste secteur 2':
            $sum1 = $Montant_remboursé;
            if ($age > 18) :
                $sum1++;
            endif;
            return $sum1;
            break;

        case 'Psychiatre secteur 1':
            $sum2 = $Psychiatre_1;
            if ($age > 18) :
                $sum2++;
            endif;
            return $sum2;
            break;

        case 'Psychiatre secteur 2':
            $sum3 = $Psychiatre_2;
            if ($age > 18) :
                $sum3++;
            endif;
            return $sum3;
            break;

        default:
            break;
    }
}
