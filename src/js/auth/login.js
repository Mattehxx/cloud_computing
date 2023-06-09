$(document).ready(function() {
    $('#sumbit_button').click(()=> {

        $("#sumbit_button").attr("disabled", true);
        
        var formData = {
            username:$('#username').val(),
            password:$('#password').val(),
        };

        $.ajax({
            type: 'POST',
            url: '../auth/login.php',
            data: formData,
            dataType: 'json',

            success: (data)=> {
                console.log(data);
                sessionStorage.setItem('islogged', 'TRUE');
                window.location.replace('home.php');
            },
            error: (data)=> {
                console.log(data);
                sessionStorage.setItem('islogged', 'FALSE');
                let error_alert=$('<div class="alert alert-danger" role="alert"></div>').text('Login failed. Try again or create a new profile!');
                $('#alert_card').append(error_alert);
            }
        });
    });
});