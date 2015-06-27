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
        console.log($(this).text());
        $.ajax({
                url: webroot + 'manage/getTagsByName/',
                type: 'POST',
                data: {serie: $(this).text()},
                dataType: 'JSON',
                success: function (data) {
                    console.log('reussi');
                    console.log(data);
                    $('#menu-filter').detach();
                    $('.filters').append('<ul class="w-list-unstyled filter-list" id="menu-filter"><li class="filter-iterm"><a class="filter" href="#" data-filter="all">All</a></li>');
                    var d;
                    for (d in data) {
                        console.log(d);
                        $('#menu-filter').append('<li class="filter-iterm"><a class="filter" href="#" data-filter=".' + data[d]['Label'] + '">' + data[d]['Label'] + '</a></li>');
                    }
                    $('#filters').append('</ul>')
                },
                error: function (e) {
                    console.log(e);
                    console.log('erreur');
                }});
    })

});
