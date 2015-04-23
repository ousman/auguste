$(document).ready(function () {
    $('#series').on('change', function () {
        $('#tags').prop('selectedIndex',0);
        var filter = '.'+$('#series').find(":selected").text().toLowerCase();
        $('#series').attr('data-filter', filter);
        $('#series').removeClass('active');
        $('#series').find(":selected").addClass('active');
        console.log(filter);
    });
    
        $('#tags').on('change', function () {
        $('#series').prop('selectedIndex',0);
        var filter = '.'+$('#tags').find(":selected").text().toLowerCase();
        $('#tags').attr('data-filter', filter);
        $('#tags').removeClass('active');
        $('#tags').find(":selected").addClass('active');
        console.log(filter);
    });
    
});
