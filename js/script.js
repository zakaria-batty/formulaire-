
$(document).ready(function () {

    // show results section    
    // $("#btn").on('click', function (e) {
    //     $('.box').show();
    //     e.preventDefault();
    // });

    // hide results section 
    $(".box-close").click(function () {
        $(this).parents(".box").fadeOut(1000);
    });
});



