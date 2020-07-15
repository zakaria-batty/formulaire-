const activities = document.getElementById('sect-choices');
const SelectFm = document.getElementById("sect-femmes");
const nmbr1 = document.getElementById("nmbr1");
const nmbr2 = document.getElementById("nmbr2");
const women = document.getElementById("women");

activities.addEventListener("change", function () {

    if (activities.value == "Madame") {
        SelectFm.style.display = 'block';

    } 

});

women.addEventListener("change", function () {

    if (women.value == "enciente") {
        nmbr1.style.display = 'block';
    }else{
        nmbr2.style.display = 'block';
        nmbr1.style.display = 'none';
    }
});

// women.addEventListener("change", function () {

//     if (women.value == "accouchement") {
      

//     }
// });






