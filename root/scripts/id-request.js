$.ajax({
    url: "getUserID.php",
    method: "GET",
    data: {
        email: "user@example.com"
    },
    success: function(data) {
        const userId = data;
        console.log("User ID:", userId);
    },
    error: function() {
        console.error("Error retrieving user ID");
    }
});
