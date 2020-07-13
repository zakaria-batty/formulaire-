<?php

class compute
{

    // function for calculation of refund amount
    function Montant($nmbr)
    {

        // A function for calculating age
        $date = $_POST['date-naissance'];
        $today = date("d-m-Y");
        $diff = date_diff(date_create($date), date_create($today));
        $age = $diff->format('%y');

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
                if ($age >= $nmbr) :
                    $sum1++;
                endif;
                return $sum1;
                break;

            case 'Psychiatre secteur 1':
                $sum2 = $Psychiatre_1;
                if ($age >= $nmbr) :
                    $sum2++;
                endif;
                return $sum2;
                break;

            case 'Psychiatre secteur 2':
                $sum3 = $Psychiatre_2;
                if ($age >= $nmbr) :
                    $sum3++;
                endif;
                return $sum3;
                break;

            default:
                break;
        }
    }

    // function for calculation total
    function total()
    {

        $tarif = $_POST['tarif-consultation'];
        $Montant_remboursé = 25 * 70 / 100;
        $Psychiatre_1 = 41.70 * 70 / 100;
        $Psychiatre_2 = 39.00 * 70 / 100;

        switch ($_POST['Médecin']) {
            case 'Généraliste secteur 1':
            case 'Généraliste secteur 2':
            case 'Spécialiste secteur 1':
            case 'Spécialiste secteur 2':
                $sum1 = $tarif - $Montant_remboursé;
                return $sum1;
                break;

            case 'Psychiatre secteur 1':
                $sum2 = $tarif - $Psychiatre_1;
                return $sum2;
                break;

            case 'Psychiatre secteur 2':
                $sum3 = $tarif - $Psychiatre_2;
                return $sum3;
                break;

            default:
                break;
        }
    }
}

$class = new compute();
