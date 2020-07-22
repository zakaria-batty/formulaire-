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
                    include("./function/function.php");
                ?>
                    <article class="box affiche">
                        <div class="content">
                            <table class="table">
                                <tr>
                                    <th class="th">Montant Remboursé</th>
                                    <th class="th">Total</th>
                                </tr>
                                <tr>
                                    <td class="td"><?php Montant() .  " €"; ?></td>
                                    <td class="td"><?php total() . " €"; ?></td>
                                </tr>
                            </table>
                        </div>
                    </article>
                <?php
                } else {
                ?>

                    <!-- formulaire -->
                    <form class="formulaire" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                        <!-- section-question -->
                        <!-- <h3 class="title">Rapide, gratuit et sans engagement !</h3> -->
                        <div class="sect-choices">
                            <div class="questions">
                                <div id="sect-choices">
                                    <p class="form__question"> Civilité</p>
                                    <div class="radio-group" style="padding-bottom: 20px;">
                                        <label class="radio">
                                            <input onclick="Evnt('mr')" type="radio" name="Civilité" id="Mr" value="Mr">
                                            Mr
                                            <span></span>
                                        </label>
                                        <label class="radio">
                                            <input onclick="Evnt('Mlle')" type="radio" name="Civilité" id="Mlle" value="Mlle">
                                            Mlle
                                            <span></span>
                                        </label>
                                        <label class="radio">
                                            <input onclick="Evnt('Mme')" type="radio" name="Civilité" id="Mme" value="Mme">
                                            Mme
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Section formule -->
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
                                <label class="label" for="date_début">Date de naissance*</label><br>
                                <input class="input" type="date" name="date-naissance" style=" width: 204px; height: 19px;" required>
                            </div>
                        </div>
                        <!--  section-question -->
                        <div class="sect-choices">
                            <div class="questions">
                                <p class="form__question">Choisissez votre type de consultation </p>
                                <div>
                                    <div style=" text-align: justify;">
                                        <label class="radio consultation">
                                            <input onclick="Evnt('Medecin-A')" type="radio" name="MD" value="Mr">
                                            Vous consultez votre médecin traitant ou son remplaçant ou un autre médecin en cas
                                            d'urgence ou hors résidence
                                            <span></span>
                                        </label>
                                        <label class="radio consultation">
                                            <input onclick="Evnt('Medecin-B')" type="radio" name="MD" value="Mr">
                                            Vous consultez un médecin correspondant spécialiste dans le cadre d'un "suivi
                                            régulier"
                                            <span></span>
                                        </label>
                                        <label class="radio consultation">
                                            <input onclick="Evnt('Medecin-C')" type="radio" name="MD" value="Mr">
                                            vous consultez un médcin correspondant spécialiste pour un "avis" ponctuel
                                            <span></span>
                                        </label>
                                        <label class="radio consultation">
                                            <input onclick="Evnt('Medecin-II')" type="radio" name="MD" value="Mr">
                                            Hors du parcours de soins (vous n'avez pas déclaré de medecin traitant et/ou vous
                                            consultez directement un spécialiste sans étre orienté par votre médecin traitant)
                                            <span></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="formule">
                                    <div class="les-input" id="Medecin-A" style="display: none;">
                                        <select class="input" name="Medecin-A" id="" placeholder="" style=" width: 217px;">
                                            <option value="">Médecin consulté</option>
                                            <option value="Généraliste secteur 1">Généraliste secteur 1</option>
                                            <option value="Généraliste secteur 2">Généraliste secteur 2</option>
                                            <option value="Spécialiste secteur 1">Spécialiste secteur 1</option>
                                            <option value="Spécialiste secteur 2">Spécialiste secteur 2</option>
                                            <option value="Psychiatre secteur 1">Psychiatre secteur 1</option>
                                            <option value="Psychiatre secteur 2">Psychiatre secteur 2</option>
                                        </select>
                                    </div>
                                    <div class="les-input" id="Medecin-B" style="display: none;">
                                        <select class="input" name="Medecin-B" id="" placeholder="" style=" width: 217px;">
                                            <option value="">Médecin consulté</option>
                                            <option value="Généraliste secteur 1">Généraliste secteur 1</option>
                                            <option value="Généraliste secteur 2">Généraliste secteur 2</option>
                                            <option value="Spécialiste secteur 1">Spécialiste secteur 1</option>
                                            <option value="Spécialiste secteur 2">Spécialiste secteur 2</option>
                                            <option value="Psychiatre secteur 1">Psychiatre secteur 1</option>
                                            <option value="Psychiatre secteur 2">Psychiatre secteur 2</option>
                                            <option value="Cardioloque secteur 1">Cardioloque secteur 1</option>
                                            <option value="Cardioloque secteur 2">Cardioloque secteur 2</option>
                                        </select>
                                    </div>
                                    <div class="les-input" id="Medecin-C" style="display: none;">
                                        <select class="input" name="Medecin-C" id="" placeholder="" style=" width: 217px;">
                                            <option value="">Médecin consulté</option>
                                            <option value="Spécialiste secteur 1">Spécialiste secteur 1</option>
                                            <option value="Spécialiste secteur 2">Spécialiste secteur 2</option>
                                            <option value="Psychiatre secteur 1">Psychiatre secteur 1</option>
                                            <option value="Psychiatre secteur 2">Psychiatre secteur 2</option>
                                        </select>
                                    </div>
                                    <div class="les-input" id="Medecin-II" style="display: none;">
                                        <select class="input" name="Medecin-II" id="" placeholder="" style=" width: 217px;">
                                            <option value="">Médecin consulté</option>
                                            <option value="Généraliste secteur 1">Généraliste secteur 1</option>
                                            <option value="Généraliste secteur 2">Généraliste secteur 2</option>
                                            <option value="Spécialiste secteur 1">Spécialiste secteur 1</option>
                                            <option value="Spécialiste secteur 2">Spécialiste secteur 2</option>
                                            <option value="Psychiatre secteur 1">Psychiatre secteur 1</option>
                                            <option value="Psychiatre secteur 2">Psychiatre secteur 2</option>
                                            <option value="Cardioloque secteur 1">Cardioloque secteur 1</option>
                                            <option value="Cardioloque secteur 2">Cardioloque secteur 2</option>
                                        </select>
                                    </div>
                                    <div class="les-input" id="tarif" style="display: none;">
                                        <input class="input" type="number" name="tarif-consultation" placeholder="tarif consultation*" required>
                                    </div>
                                </div>

                                <div id="sect-femmes" style="display: none;">
                                    <p class="form__question">Êtes-vous enceinte</p>
                                    <div class="radio-group">
                                        <label class="radio">
                                            <input onclick="Evnt('enceinte')" id="Oui" type="radio" name="enciente" value="Oui">
                                            Oui
                                            <span></span>
                                        </label>

                                        <label class="radio">
                                            <input onclick="Evnt('pasenceinte')" id="Non" type="radio" name="enciente" value="Non">
                                            Non
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div id="Nmbr-mois" style="display: none;">
                                    <p class="form__question">Nombre de mois de grosses</p>
                                    <div class="les-input">
                                        <input class="input-number" type="number" name="N-grosses" id="Oui" value="Oui" placeholder="Nombre de mois de grosses">
                                    </div>
                                </div>
                                <div id="Nmbr-jours" style="display: none;">
                                    <p class="form__question">Avez-vous accouché il y a moins de 12 jours</p>
                                    <div class="radio-group">
                                        <label class="radio">
                                            <input type="radio" name="accouche" id="Oui" value="Oui">
                                            Oui
                                            <span></span>
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="accouche" id="Non" value="Non">
                                            Non
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button">
                            <button class="btn" type="submit" name="comparer">Calculer le montant de remboursement</button>
                        </div>
                    </form>
                <?php } ?>
            </article>
        </div>
    </section>
    <script src="js/script.js"></script>

</body>

</html>