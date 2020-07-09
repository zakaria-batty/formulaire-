<?php
function compute()
{
    // $tarif_consultation = $_POST['tarif-consultation'];
    $Montant_remboursé = 16.5;
    $Montant_remboursé1 = 28.19;
    $Montant_remboursé2 = 26.30;
    $£ = 1;

    switch ($_POST['Médecin']) {
        case 'Généraliste secteur 1':
            $sum1 = $Montant_remboursé + $£;
            return $sum1;
            break;

        case 'Généraliste secteur 2':
            $sum2 = $Montant_remboursé + $£;
            return $sum2;
            break;


        case 'Spécialiste secteur 1':
            $sum3 = $Montant_remboursé + $£;
            return $sum3;
            break;

        case 'Spécialiste secteur 2':
            $sum4 = $Montant_remboursé + $£;
            return $sum4;
            break;

        case 'Psychiatre Neuropsychiatre Neurologue secteur 1':
            $sum5 = $Montant_remboursé1 + $£;
            return $sum5;
            break;

        case 'Psychiatre Neuropsychiatre Neurologue secteur 2':
            $sum6 = $Montant_remboursé2 + $£;
            return $sum6;
            break;


        default:
            // echo 'invalid operation';
            break;
    }
}
