$('#submitForm').click(function(e) {
    e.preventDefault();
    var leaderName = $('#leaderName').val();
    var leaderUID = $('#leaderUID').val();
    var leaderEmail = $('#leaderEmail').val();
    var teamName = $('#teamName').val();
    var teamTag = $('#teamTag').val();
    // var teamLogo = $('#teamTag').val();
    var teamFacebook = $('#teamTag').val();
    var teamWebsite = $('#teamTag').val();
    var privacypolicy = $('#privacypolicy').is(":checked");

    $('.formResponse').remove();


    //Disable button
    $('#submitForm').prop('disabled', true);
    $('#submitForm').text("Czekaj");

    $.ajax({
        url: 'http://localhost/forms/esport/submit',
        type: 'post',
        data: { 
            leaderName: leaderName,
            leaderUID: leaderUID,
            leaderEmail: leaderEmail,
            teamName: teamName,
            teamTag: teamTag,
            // teamLogo: teamLogo,
            teamFacebook: teamFacebook,
            teamWebsite: teamWebsite,
            privacypolicy: privacypolicy
        },
        success: function(data){

            var res = $.parseJSON(data);

            if (res.status == 'success') {

                // TODO
                // On click the button should be replaced by an animation, showing user that something is happening
                // so they don't click several times, button should be disabled during this

                // Clear inputs in contact form
                $(this).closest('form').find("input[type=text]").val('');

                // Display message to user
                $("#submitForm").before("<p class='formResponse alert alert-success' style='color:green;'> Aplikacja wysłana pomyślnie </p>");

                // Reset csrf token
                $('.csrf_test_name').val(res.csrf);

                //Re-enable button
                $('#submitForm').prop('disabled', false);
                $('#submitForm').text('Wyślij');

            } else if(res.status == 'invalid') {
                // Display errors in inputs to user
                $.each(res.errors, function(i, error){
                    $("#submitForm").before("<li class='formResponse alert alert-danger' style='color:red;'>" + error + "</li>");
                })
            } else {
                // Display to user that an unexpected error was encountered
                $("#submitForm").before("<p class='formResponse alert alert-danger' style='color:red;'>" + res.message + "</p>");
            }

            //Re-enable button
            $('#submitForm').prop('disabled', false);
            $('#submitForm').text('Wyślij');

        },
        failure: function(){
            
            // Show that an unknown error has occurred
            $("#submitForm").before("<p class='formResponse alert alert-danger' style='color:red;'>An unknown error has occurred! Please try again later.</p>");

            //Re-enable button
            $('#submitForm').prop('disabled', false);
            $('#submitForm').text('Wyślij');
        },
        error: function (xhr, ajaxOptions, thrownError) {
            // Display in console error sent by server, should be disabled in production
            console.log(xhr.status);
            console.log(ajaxOptions);
            console.log(thrownError);

            // Show that an error on server side has occurred
            $("#submitForm").before("<p class='formResponse alert alert-danger' style='color:red;'>An unknown error has occurred! Please try again later.</p>");
            
            //Re-enable button
            $('#submitForm').prop('disabled', false);
            $('#submitForm').text("Wyślij");
        
        }
    });
});