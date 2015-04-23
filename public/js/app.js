$(document).ready(function () {
    $('#series').on('change', function () {
        var filter = '.'+$('#series').find(":selected").text().toLowerCase();
        $('#series').attr('data-filter', filter);
        $('#series').removeClass('active');
        $('#series').find(":selected").addClass('active');
        console.log(filter);
    });
    
        $('#tags').on('change', function () {
        var filter = '.'+$('#tags').find(":selected").text().toLowerCase();
        $('#tags').attr('data-filter', filter);
        $('#tags').removeClass('active');
        $('#tags').find(":selected").addClass('active');
        console.log(filter);
    });
    
});
