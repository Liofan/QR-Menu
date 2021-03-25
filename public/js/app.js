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
    $("#lightSlider").lightSlider({
        addClass: 'cat_link',
        mode: "slide",
        useCSS: true,
    });
});





/*Dropdown Menu*/
$('.dropdown').click(function () {
    $(this).attr('tabindex', 1).focus();
    $(this).toggleClass('active');
    $(this).find('.dropdown-menu').slideToggle(300);
});
$('.dropdown').focusout(function () {
    $(this).removeClass('active');
    $(this).find('.dropdown-menu').slideUp(300);
});
$('.dropdown .dropdown-menu li').click(function () {
    $(this).parents('.dropdown').find('span').text($(this).text());
    $(this).parents('.dropdown').find('input').attr('value', $(this).attr('id'));
});
/*End Dropdown Menu*/


// $('.dropdown-menu li').click(function () {
//     var input = '<strong>' + $(this).parents('.dropdown').find('input').val() + '</strong>',
//         msg = '<span class="msg">Hidden input value: ';
//     $('.msg').html(msg + input + '</span>');
// });
