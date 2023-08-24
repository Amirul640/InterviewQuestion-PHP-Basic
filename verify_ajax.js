$(document).ready(function() {
    $("#verification-form").submit(function(event) {
        event.preventDefault(); // Prevent the form from submitting normally

        var username = $("#username").val();

        if (username !== "") {
            $.ajax({
                type: "POST",
                url: "info.php",
                data: { username: username },
                success: function(response) {
                    if (response.trim() === "Verified") {
                        $("#verification-result").html("Verified");
                        $("#verification-result").css("color", "green");
                    } else {
                        $("#verification-result").html("Error");
                        $("#verification-result").css("color", "red");
                    }
                }
            });
        } else {
            $("#verification-result").html("Please enter a username.");
            $("#verification-result").css("color", "red");
        }
    });
});
