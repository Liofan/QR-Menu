function addCart () {
    document.getElementById("add_cart").style.display="none";
    $('.kolicestvo').css('display','inline');
}

function Next() {


    var name = document.getElementsByClassName("title-prod")[0].innerHTML;
    var idProd = document.getElementsByClassName("id_prod")[0].innerHTML;
    var price = document.getElementsByClassName("price-prod")[0].innerHTML;
    var kol = $( ".quantity" ).val();

    var price = price.slice(0,-1)


    console.log(name, idProd, price, kol);




}




$('.btn-plus, .btn-minus').on('click', function(e) {
    const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
    const input = $(e.target).closest('.input-group').find('input');
    if (input.is('input')) {
        input[0][isNegative ? 'stepDown' : 'stepUp']()
    }
})



$(document).ready(function() {
    $("#lightSlider").lightSlider();
});
