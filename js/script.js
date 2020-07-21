//
const sect_femmes = document.getElementById("sect-femmes");
const Nmbr_Jours = document.getElementById("Nmbr-jours");
const Nmbr_mois = document.getElementById("Nmbr-mois");
const tarif = document.getElementById("tarif");
const Medecin_A = document.getElementById("Medecin-A");
const Medecin_B = document.getElementById("Medecin-B");
const Medecin_C = document.getElementById("Medecin-C");
const Medecin_II = document.getElementById("Medecin-II");

function Evnt(X) {

    if (X == 'mr') {

        sect_femmes.style.display = 'none';
        Nmbr_Jours.style.display = 'none';
        Nmbr_mois.style.display = 'none';
    } else if (X == 'Medecin-A') {

        tarif.style.display = 'block';
        Medecin_A.style.display = 'block';
        Medecin_B.style.display = 'none';
        Medecin_C.style.display = 'none';
        Medecin_II.style.display = 'none';
    } else if (X == 'Medecin-B') {

        tarif.style.display = 'block';
        Medecin_B.style.display = 'block';
        Medecin_A.style.display = 'none';
        Medecin_C.style.display = 'none';
        Medecin_II.style.display = 'none';
    } else if (X == 'Medecin-C') {

        tarif.style.display = 'block';
        Medecin_C.style.display = 'block';
        Medecin_A.style.display = 'none';
        Medecin_B.style.display = 'none';
        Medecin_II.style.display = 'none';
    } else if (X == 'Medecin-II') {

        tarif.style.display = 'block';
        Medecin_II.style.display = 'block';
        Medecin_A.style.display = 'none';
        Medecin_B.style.display = 'none';
        Medecin_C.style.display = 'none';
    } else if (X == 'Mlle' || X == 'Mme') {

        sect_femmes.style.display = 'block';
        Nmbr_Jours.style.display = 'none';
        Nmbr_mois.style.display = 'none';
    } else if (X == 'enceinte') {

        Nmbr_mois.style.display = 'block';
        sect_femmes.style.display = 'none';
    } else if (X == 'pasenceinte') {

        Nmbr_Jours.style.display = 'block';
        sect_femmes.style.display = 'none';
    } else {
    }
    return
}
