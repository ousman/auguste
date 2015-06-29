$(document).ready(function () {
    $('#series').on('change', function () {
        $('#tags').prop('selectedIndex', 0);
        var filter = '.' + $('#series').find(":selected").text().toLowerCase();
        $('#series').attr('data-filter', filter);
        $('#series').removeClass('active');
        $('#series').find(":selected").addClass('active');
        console.log(filter);

    });

    $('#tags').on('change', function () {
        $('#series').prop('selectedIndex', 0);
        var filter = '.' + $('#tags').find(":selected").text().toLowerCase();
        $('#tags').attr('data-filter', filter);
        $('#tags').removeClass('active');
        $('#tags').find(":selected").addClass('active');
        console.log(filter);
    });


    $('.filter').click(function () {
        var webroot = $('#webroot').val();
        var serie = $(this).text();
        var id = $(this).closest('div').attr('id');
        var div = $(this).closest('div');
        console.log($(this).text());
        console.log(id);
        if(id == 'default'){
            console.log('je suis dedans');
            div.hide();
            $('#'+serie).show();
        }
        else if(serie == 'Retour'){
            div.hide();
            $('#default').show();
        }
    })

});
