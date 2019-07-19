import $ from 'jquery';

import './css/style.css';

import './node_modules/@fortawesome/fontawesome-free/js/all';

$(function() {

    let selectTarget = $(".select-box select");

    selectTarget.change(function() {

        let select_name = $(this).children("option:selected").text();
        $(this).siblings("label").text(select_name);

    });

    let selectBtn = $("#main-section .select-info span");
    let sectionBox = $("#main-section .main-inner-box > div");
    
    selectBtn.on("click", (e) => {
        
        $("#main-section .select-info span").removeClass("active");
        $(e.target).addClass("active");

        let num = e.target.dataset.number;

        sectionBox.removeClass("active");
        
        $("#main-section .main-inner-box > div").eq(num).addClass("active");

    });
    
});