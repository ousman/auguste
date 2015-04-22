$( "#category li a" ).click(function() { 
    // Get data of category
    var customType = $( this ).data('filter'); // category
    console.log(customType);
    console.log(posts.length); // Length of articles
    
    posts
        .hide()
        .filter(function () {
            return $(this).data('cat') === customType;
        })
        .show();
});