<?php
include("./checkinfo/CheckFormule.php");
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
        <div class="content__formule">
            <h3>Rapide, gratuit et sans engagement !</h3>
            <p class="errors"><?php if (!empty($errors)) : echo $errors;
                                endif; ?> </p>
            <article class="block">
                <form class="block__form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="parent">

                        <div class="parent__children">
                            <input class="parent__input" type="text" name="Nom" placeholder="Nom*" value="<?php echo isset($_POST['Nom']) ? $_POST['Nom'] : ''; ?>">
                        </div>

                        <div class="parent__children">
                            <input class="parent__input" type="text" name="Prénom" placeholder="Prénom*" value="<?php echo isset($_POST['Prénom']) ? $_POST['Prénom'] : ''; ?>">
                        </div>

                        <div class="parent__children">
                            <input class="parent__input" type="number" name="Téléphone" placeholder="Téléphone*" value="<?php echo isset($_POST['Téléphone']) ? $_POST['Téléphone'] : ''; ?>">
                        </div>

                        <div class="parent__children">
                            <input class="parent__input" type="text" name="Email" placeholder="Email*" value="<?php echo isset($_POST['Email']) ? $_POST['Email'] : ''; ?>">
                        </div>

                        <div class="parent__children">
                            <input class="parent__input" type="number" name="Nombre-denfants" placeholder="Nombre d'enfants*" value="<?php echo isset($_POST['Nombre-denfants']) ? $_POST['Nombre-denfants'] : ''; ?>">
                        </div>

                        <div class="parent__children">
                            <select name="regime" id="regime" placeholder="Régime" style=" width: 171px; height: 21px;">
                                <option value="">Régime</option>
                                <option value="Général">Général</option>
                                <option value="Travailleur non salarié">Travailleur non salarié</option>
                                <option value="Exploitant agricole">Exploitant agricole</option>
                                <option value="Alsace - Moselle">Alsace - Moselle</option>
                            </select>
                        </div>

                        <div class="parent__children">
                            <select name="Médecin" id="regime" placeholder="Régime" style=" width: 171px; height: 21px;">
                                <option value="">Médecin consulté</option>
                                <option value="Généraliste secteur 1">Généraliste secteur 1</option>
                                <option value="Généraliste secteur 2">Généraliste secteur 2</option>
                                <option value="Spécialiste secteur 1">Spécialiste secteur 1</option>
                                <option value="Spécialiste secteur 2">Spécialiste secteur 2</option>
                                <option value="Psychiatre Neuropsychiatre Neurologue secteur 1">Psychiatre Neuropsychiatre Neurologue secteur 1</option>
                                <option value="Psychiatre Neuropsychiatre Neurologue secteur 2">Psychiatre Neuropsychiatre Neurologue secteur 2</option>
                            </select>
                        </div>

                        <div class="parent__children">
                            <input class="parent__input" type="number" name="tarif-consultation" placeholder="tarif consultation*" value="<?php echo isset($_POST['tarif-consultation']) ? $_POST['tarif-consultation'] : ''; ?>">
                        </div>

                        <div class="parent__children">
                            <input class="parent__input" type="text" name="Ville" placeholder="Ville*" value="<?php echo isset($_POST['Ville']) ? $_POST['Ville'] : ''; ?>">
                        </div>

                        <div class="parent__children">
                            <input class="parent__input" type="number" name="Code-postal" placeholder="Code postal*" value="<?php echo isset($_POST['Code-postal']) ? $_POST['Code-postal'] : ''; ?>">
                        </div>

                        <div class="parent__children">
                            <label class="parent__label" for="date_début">Date de naissance*</label><br>
                            <input class="parent__input" type="date" name="date-naissance" value="<?php echo isset($_POST['date-naissance']) ? $_POST['date-naissance'] : ''; ?>" style=" width: 167px; height: 19px;">
                        </div>

                        <div class="parent__children">
                            <label class="parent__label" for="date_début">Date d'effet du contart*</label><br>
                            <input class="parent__input" type="date" name="date-effet-contrat" value="<?php echo isset($_POST['date-effet-contrat']) ? $_POST['date-effet-contrat'] : ''; ?>" style=" width: 167px; height: 19px;">
                        </div>

                    </div>
                    <div class="parent__div">
                        <button id="envoyés" class="parent__btn" type="submit" name="comparer">Je compare</button>
                    </div>
                </form>
            </article>
            <div>
                <h1>
                    <?php echo "total reboursement " . compute() . " £" ; ?>
                </h1>
            </div>
        </div>
    </section>
</body>

</html>