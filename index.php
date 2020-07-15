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
    <title>formulaire</title>
</head>

<body>
    <section class="content">
        <div class="nav-content">
            <h3 class="title">Rapide, gratuit et sans engagement !</h3>
            <article class="block">
                <?php
                if (isset($_POST["Nom"])) {
                    include("./checkinfo/CheckFormule.php");
                ?>
                    <article class="box affiche">
                        <div class="content">
                            <!-- <span class="box-close">X</span> -->
                            <table class="table">
                                <tr>
                                    <th class="th">Montant Remboursé</th>
                                    <th class="th">Total</th>
                                </tr>
                                <tr>
                                    <td class="td"><?php Montant() . " €";?></td>
                                    <td class="td"><?php echo total() . " €";?></td>
                                </tr>
                            </table>
                        </div>
                    </article>
                <?php
                } else {
                ?>
                    <form class="formulaire" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div class="formule">
                            <div class="les-input">
                                <input class="input" type="text" name="Nom" placeholder="Nom*" required>
                            </div>
                            <div class="les-input">
                                <input class="input" type="text" name="Prenom" placeholder="Prénom*" required>
                            </div>
                            <div class="les-input">
                                <input class="input" type="number" name="Telephone" placeholder="Téléphone*" required>
                            </div>
                            <div class="les-input">
                                <input class="input" type="text" name="Email" placeholder="Email*" required>
                            </div>
                            <div class="les-input">
                                <input class="input" type="number" name="Nombre-denfants" placeholder="Nombre d'enfants*" required>
                            </div>
                            <div class="les-input">
                                <input class="input" type="number" name="tarif-consultation" placeholder="tarif consultation*" required>
                            </div>
                            <div class="les-input">
                                <input class="input" type="text" name="Ville" placeholder="Ville*" required>
                            </div>
                            <div class="les-input">
                                <input class="input" type="number" name="Code-postal" placeholder="Code postal*" required>
                            </div>
                            <div class="les-input">
                                <label class="label" for="date_début">Date de naissance*</label><br>
                                <input class="input" type="date" name="date-naissance" style=" width: 204px; height: 19px;" required>
                            </div>
                            <div class="les-input">
                                <label class="label" for="date_début">Date d'effet du contart*</label><br>
                                <input class="input" type="date" name="date-effet-contrat" style=" width: 196px; height: 19px;" required>
                            </div>
                            <div class="les-input">
                                <select class="input" name="regime" id="regime" placeholder="Régime" style=" width: 217px;" required>
                                    <option value="">Régime</option>
                                    <option value="Général">Général</option>
                                    <option value="Travailleur non salarié">Travailleur non salarié</option>
                                    <option value="Exploitant agricole">Exploitant agricole</option>
                                    <option value="Alsace - Moselle">Alsace - Moselle</option>
                                </select>
                            </div>
                            <div class="les-input">
                                <select class="input" name="Medecin" id="regime" placeholder="Régime" style=" width: 217px;" required>
                                    <option value="">Médecin consulté</option>
                                    <option value="Généraliste secteur 1">Généraliste secteur 1</option>
                                    <option value="Généraliste secteur 2">Généraliste secteur 2</option>
                                    <option value="Spécialiste secteur 1">Spécialiste secteur 1</option>
                                    <option value="Spécialiste secteur 2">Spécialiste secteur 2</option>
                                    <option value="Psychiatre secteur 1">Psychiatre secteur 1</option>
                                    <option value="Psychiatre secteur 2">Psychiatre secteur 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="sect-choices">
                            <div class="les-input">
                                <select id="sect-choices" class="input" placeholder="Sexe" style=" width: 217px;" required>
                                    <option value="">Sexe</option>
                                    <option value="Madmosielle">Monsieur</option>
                                    <option value="Madame">Madame</option>
                                </select>
                            </div>
                            <div id="sect-femmes" style="display: none;" class="les-input">
                                <select id="women" class="input" placeholder="Sexe" style=" width: 217px;" required>
                                    <option value="">statut</option>
                                    <option value="enciente">femme enciente</option>
                                    <option value="accouchement">accouchement</option>
                                </select>
                            </div>
                            <div id="nmbr1" class="les-input" style="display: none;">
                                <input class="input" type="number" name="femme-enciente" placeholder="combien de mois">
                            </div>
                            <div id="nmbr2" class="les-input" style="display: none;">
                                <input class="input" type="number" name="accouchement" placeholder="Entrez le nombre de jours">
                            </div>
                        </div>
                        <div class="button">
                            <button  class="btn" type="submit" name="comparer">Je compare</button>
                        </div>
                    </form>
                <?php } ?>
            </article>
        </div>
    </section>
    <script src="js/script.js"></script>
</body>

</html>