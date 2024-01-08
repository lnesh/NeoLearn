$(document).ready(function(){
    $("#searchBox").on("keyup", function() {
        var query = $(this).val();

        if (query.length > 0) {
            $.ajax({
                url: "search.php",
                method: "POST",
                data: {search: query},
                success: function(data) {
                    $("#searchResults").html(data);
                }
            });
        } else {
            $("#searchResults").html("");
        }
    });
});
