$(document).ready(function(){
    $("#sign-up").click(function(){ 
        $(".sign-in").hide();
        $(".signup").show(); // Hiển thị/Ẩn div
    });
    $("#sign-in").click(function(){
        $(".signup").hide();
        $(".sign-in").show();
    });

// Home page
$("#start_date, #end_date").datetimepicker({
    format: "d/m/Y H:i",
    formatTime: "H:i",
    formatDate: "d/m/Y",

    startDate: false,
    step: 60,

    timepicker: false,
    datepicker: true,
    weeks: false,
});
    /****************************************
     *              HEADER                  *
     * ***************************************/
$("#userDropdown").click(function () {
    $("#dropdownMenu").toggle(); // Toggle dropdown menu when user clicks
});

});