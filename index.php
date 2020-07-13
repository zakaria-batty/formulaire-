<?php
include("./function/function.php");
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
        <div class="nav-content">
            <h3 class="title">Rapide, gratuit et sans engagement !</h3>
            <p class="errors"><?php if (!empty($errors)) : echo $errors;
                                endif; ?> </p>
            <article class="block">
                <form class="formulaire" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="formule">

                        <div class="les-input">
                            <input class="input" type="text" name="Nom" placeholder="Nom*" value="<?php echo isset($_POST['Nom']) ? $_POST['Nom'] : ''; ?>">
                        </div>

                        <div class="les-input">
                            <input class="input" type="text" name="Prénom" placeholder="Prénom*" value="<?php echo isset($_POST['Prénom']) ? $_POST['Prénom'] : ''; ?>">
                        </div>

                        <div class="les-input">
                            <input class="input" type="number" name="Téléphone" placeholder="Téléphone*" value="<?php echo isset($_POST['Téléphone']) ? $_POST['Téléphone'] : ''; ?>">
                        </div>

                        <div class="les-input">
                            <input class="input" type="text" name="Email" placeholder="Email*" value="<?php echo isset($_POST['Email']) ? $_POST['Email'] : ''; ?>">
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
                            <select class="input" name="Médecin" id="regime" placeholder="Régime" style=" width: 217px;">
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
                            <input class="input" type="number" name="Nombre-denfants" placeholder="Nombre d'enfants*" value="<?php echo isset($_POST['Nombre-denfants']) ? $_POST['Nombre-denfants'] : ''; ?>">
                        </div>

                        <div class="les-input">
                            <input class="input" type="number" name="tarif-consultation" placeholder="tarif consultation*" value="<?php echo isset($_POST['tarif-consultation']) ? $_POST['tarif-consultation'] : ''; ?>">
                        </div>

                        <div class="les-input">
                            <input class="input" type="text" name="Ville" placeholder="Ville*" value="<?php echo isset($_POST['Ville']) ? $_POST['Ville'] : ''; ?>">
                        </div>

                        <div class="les-input">
                            <input class="input" type="number" name="Code-postal" placeholder="Code postal*" value="<?php echo isset($_POST['Code-postal']) ? $_POST['Code-postal'] : ''; ?>">
                        </div>

                        <div class="les-input">
                            <label class="label" for="date_début">Date de naissance*</label><br>
                            <input class="input" type="date" name="date-naissance" value="<?php echo isset($_POST['date-naissance']) ? $_POST['date-naissance'] : ''; ?>" style=" width: 204px; height: 19px;">
                        </div>

                        <div class="les-input">
                            <label class="label" for="date_début">Date d'effet du contart*</label><br>
                            <input class="input" type="date" name="date-effet-contrat" value="<?php echo isset($_POST['date-effet-contrat']) ? $_POST['date-effet-contrat'] : ''; ?>" style=" width: 196px; height: 19px;">
                        </div>

                    </div>
                    <div class="button">
                        <button id="btn" class="btn" type="submit" name="comparer">Je compare</button>
                    </div>
                </form>
            </article>
    </section>
    <article class="box affiche">
        <div class="content">
            <span class="box-close">X</span>
            <table class="table">
                <tr>
                    <th class="th">Montant Remboursé</th>
                    <th class="th">Total</th>
                </tr>
                <tr>
                    <td class="td"><?php if (!empty($Médecin)) : echo $class->Montant(18) . " €";
                        endif; ?></td>
                    <td class="td"><?php if (!empty($tarif)) : echo $class->total() . " €";
                        endif; ?></td>
                </tr>
            </table>
        </div>
    </article>

    <!-- if (!empty($Médecin)) : echo "<article class='box'>" .
        "<div class='content'>" .
        " <span class='box-close'>" . "X" . "</span>" .
        "<h1>" ."total " . $class->Montant() . " €". "</h1>" .
        "<h1>" ."total " . $class->total() . " €". "</h1>" .
        "</div>" .
        "</article>";
    endif; -->

    <script src="js/jquery-3.5.1.min (1).js"></script>
    <script src="js/script.js"></script>
</body>

</html>