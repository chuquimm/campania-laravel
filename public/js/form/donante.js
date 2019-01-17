/* $(document).ready(function(){
    $('.datepicker').datepicker();
}); */

$(document).ready(function(){
    // $('#provincia').prop("disabled", true);
    // $('#distrito').prop("disabled", true);
    $('select').formSelect();
});

$(document).ready(function () {
    $('#checkSangre').click(function () {
        if ($(this).is(":checked")) {
            $( ".sangre select" ).prop( "disabled", true );
            $('.sangre select').formSelect();
        } else {
            $( ".sangre select" ).prop( "disabled", true );
            $('.sangre select').formSelect();
        }
    });
});

$(document).ready(function(){    
    $('#departamento').change(function(){
        $('#provincia').prop("disabled", false);
        let departamento_id = $(this).val();
        
        if (departamento_id) {
            let url = '/provincias/get/' + departamento_id;
            $.get(url, function (provincias) {
                $('#provincia').empty();
                $('#provincia').append('<option value="" disabled selected>Provincia</option>');
                $.each(provincias, function (key, value) {
                    $('#provincia').append('<option value="' + key + '">' + value + '</option>')
                    $('#provincia').formSelect();
                })
            });
        } else {
            console.warn("No hay departamento_id");
        }
    });
});

$(document).ready(function () {
    $('#provincia').change(function () {
        $('#distrito').prop('disabled', false);
        $('select').formSelect();
        
        let provincia_id = $(this).val();
        if (provincia_id) {
            let url = '/distritos/get/' + provincia_id
            $.get(url, function (distritos) {
                $('#distrito').empty();
                $('#distrito').append('<option value="" disabled selected>Distrito</option>');
                $.each(distritos, function (key, value) {
                    $('#distrito').append('<option value="' + key + '">' + value + '</option>')
                    $('#distrito').formSelect();
                })
            });
        } else {
            console.warn("No hay provincia_id");
        }
    });
});
