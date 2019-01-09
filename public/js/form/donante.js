$(document).ready(function(){
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });
});

$(document).ready(function(){
    $('select').formSelect();
});


/* $(document).ready(function(){
    $( "#sangre" ).attr("disabled", false);
    $( "#factor" ).attr("disabled", false);
}); */


$('#checkSangre').click(function () {
    if ($(this).is(":checked")) {
        alert('check');
        // $( "#sangre" ).attr("disabled", false);
        // $( "#factor" ).attr("disabled", true);
    } else {
        alert('uncheck');
        // $( "#sangre" ).attr("disabled", true);
        // $( "#factor" ).attr("disabled", true);
    }
});