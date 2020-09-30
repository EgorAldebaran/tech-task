$(document).ready(function() {
    $("form").submit(function(event) {
        // stop form from submitting normally
        event.preventDefault();
        let formValues = $(this).serialize();
        //send the form data using post
        $.post("model.php", formValues, function(data) {
            // display th ereturnded data in browser
            $("#result").html(data);
        })
    })
})
