$(document).ready(function(){
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });
});

$(document).ready(function(){
    $('select').formSelect();
});

$('#checkSangre').click(function () {
    if ($(this).is(":checked")) {
        alert('check');
        $( ".sangre .select-dropdown" ).prop( "disabled", true );
    } else {
        alert('uncheck');
        $( ".sangre .select-dropdown" ).prop( "disabled", false );
    }
});

$( document ).ready(function() {
    $('#departamento').change(function(){
        console.log($( "#departamento" ).val());
    });  
});