  'use strict';
$(function() {
    
    /*date*/
    $(".date").inputmask({ mask: "99/99/9999"});
    $(".date2").inputmask({ mask: "99-99-9999"});
    /*time*/
    $(".hour").inputmask({ mask: "99:99:99"});
    $(".dateHour").inputmask({ mask: "99/99/9999 99:99:99"});


    $(".Telefono").inputmask({ mask: "9999-9999"});
    $(".Edad").inputmask({ mask: "99 Años"});
    $(".Libras").inputmask({ mask: "999 Libras"});
    $(".Centimetros").inputmask({ mask: " 999 Centimetros"});
    $(".Texto").inputmask({ mask: "aaaaaaaaaaaa"});
    $(".Nombres").inputmask({ mask: "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"});
    $(".Completos").inputmask({ mask: "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"});
    $(".Minoridad").inputmask({ mask: "999999999999"});

    /*numbers*/
    $('.autonumber').autoNumeric('init');
  });