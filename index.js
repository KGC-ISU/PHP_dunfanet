import $ from 'jquery';

import './css/style.css';

import './node_modules/@fortawesome/fontawesome-free/js/all';

$(function() {

    let selectTarget = $(".select-box select");

    selectTarget.change(function() {

        let select_name = $(this).children("option:selected").text();
        $(this).siblings("label").text(select_name);

    });

});