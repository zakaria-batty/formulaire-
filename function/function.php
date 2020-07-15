<?php




    // function for calculation of refund amount
    function Montant()
    {
        global $sum;

        // A function for calculating age
        $date = $_POST['date-naissance'];
        $fm_enciente = $_POST['femme-enciente'];
        $accouchement = $_POST['accouchement'];
        $today = date("d-m-Y");
        $diff = date_diff(date_create($date), date_create($today));
        $age = $diff->format('%y');

        // variables
        $Montant_rembourse = 25 * 70 / 100;
        $Psychiatre_1 = 41.70 * 70 / 100;
        $Psychiatre_2 = 39.00 * 70 / 100;

        // Coditions for choosing doctors
        switch ($_POST['Medecin']) {
            case 'Généraliste secteur 1':
            case 'Généraliste secteur 2':
            case 'Spécialiste secteur 1':
            case 'Spécialiste secteur 2':
                $sum = $Montant_rembourse;
                break;

            case 'Psychiatre secteur 1':
                $sum = $Psychiatre_1;
                break;

            case 'Psychiatre secteur 2':
                $sum = $Psychiatre_2;
                break;

            default:
                break;
        }
        if ($age >= 18 || $fm_enciente >=6 ||  $accouchement <=12) :
            $sum--;
        endif;
        echo $sum;
    }

    // function for calculation total
    function total()
    {
        global $sum;

        $tarif = $_POST['tarif-consultation'];

        switch ($_POST['Medecin']) {
            case 'Généraliste secteur 1':
            case 'Généraliste secteur 2':
            case 'Spécialiste secteur 1':
            case 'Spécialiste secteur 2':
                $sum1 = $tarif - $sum;
                return $sum1;
                break;

            case 'Psychiatre secteur 1':
                $sum2 = $tarif - $sum;
                return $sum2;
                break;

            case 'Psychiatre secteur 2':
                $sum3 = $tarif - $sum;
                return $sum3;
                break;

            default:
                break;
        }
    }



