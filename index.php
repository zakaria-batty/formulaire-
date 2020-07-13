<?php
// include("./function/function.php");
// include("./checkinfo/CheckFormule.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/css/style.css">
    <title><?php echo "formulaire" ?></title>
</head>

<body>
    <section class="content">
        <div class="nav-content">
            <h3 class="title">Rapide, gratuit et sans engagement !</h3>
            <p class="errors"><?php if (!empty($errors)) : echo $errors;
                                endif; ?> </p>
            <article class="block">
            <?php
            if (isset($_POST["Nom"])) {
                include("./checkinfo/CheckFormule.php"); 
                ?>
            <article class="box affiche">
        <div class="content">
            <span class="box-close">X</span>
            <table class="table">
                <tr>
                    <th class="th">Montant Remboursé</th>
                    <th class="th">Total</th>
                </tr>
                <tr>
                    <td class="td"><?php Montant() . " €";
                 ?></td>
                </tr>
            </table>
        </div>
    </article>
    <?php
            }else{
                ?>
                <form class="formulaire" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="formule">

                        <div class="les-input">
                            <input class="input" type="text" name="Nom" placeholder="Nom*">
                        </div>

                        <div class="les-input">
                            <input class="input" type="text" name="Prenom" placeholder="Prénom*">
                        </div>

                        <div class="les-input">
                            <input class="input" type="number" name="Telephone" placeholder="Téléphone*">
                        </div>

                        <div class="les-input">
                            <input class="input" type="text" name="Email" placeholder="Email*">
                        </div>

                        <div class="les-input">
                            <select class="input" name="regime" id="regime" placeholder="Régime" style=" width: 217px;">
                                <option value="">Régime</option>
                                <option value="Général">Général</option>
                                <option value="Travailleur non salarié">Travailleur non salarié</option>
                                <option value="Exploitant agricole">Exploitant agricole</option>
                                <option value="Alsace - Moselle">Alsace - Moselle</option>
                            </select>
                        </div>

                        <div class="les-input">
                            <select class="input" name="Medecin" id="regime" placeholder="Régime" style=" width: 217px;">
                                <option value="">Médecin consulté</option>
                                <option value="Généraliste secteur 1">Généraliste secteur 1</option>
                                <option value="Généraliste secteur 2">Généraliste secteur 2</option>
                                <option value="Spécialiste secteur 1">Spécialiste secteur 1</option>
                                <option value="Spécialiste secteur 2">Spécialiste secteur 2</option>
                                <option value="Psychiatre secteur 1">Psychiatre secteur 1</option>
                                <option value="Psychiatre secteur 2">Psychiatre secteur 2</option>
                            </select>
                        </div>

                        <div class="les-input">
                            <input class="input" type="number" name="Nombre-denfants" placeholder="Nombre d'enfants*">
                        </div>

                        <div class="les-input">
                            <input class="input" type="number" name="tarif-consultation" placeholder="tarif consultation*">
                        </div>

                        <div class="les-input">
                            <input class="input" type="text" name="Ville" placeholder="Ville*">
                        </div>

                        <div class="les-input">
                            <input class="input" type="number" name="Code-postal" placeholder="Code postal*">
                        </div>

                        <div class="les-input">
                            <label class="label" for="date_début">Date de naissance*</label><br>
                            <input class="input" type="date" name="date-naissance" style=" width: 204px; height: 19px;">
                        </div>

                        <div class="les-input">
                            <label class="label" for="date_début">Date d'effet du contart*</label><br>
                            <input class="input" type="date" name="date-effet-contrat" style=" width: 196px; height: 19px;">
                        </div>

                    </div>
                    <div class="button">
                        <button id="btn" class="btn" type="submit" name="comparer">Je compare</button>
                    </div>
                </form>
            <?php } ?>
            </article>
    </section>

    <script src="js/jquery-3.5.1.min (1).js"></script>
    <script src="js/script.js"></script>
</body>

</html>