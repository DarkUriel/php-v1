$(document).ready(function() {
    $('#pass-form').submit(function(e) {
        console.log("submiting");
        const postData = {
            username: $('#username').val(),
            password: $('#password').val()
        };
        let url = './CapaNegocio/login.php';
        $.post(url, postData, function(data) {
            if (data == 'error') {
                console.log(data);
                alert('Usuario no registrado');
                $('#pass-form').trigger('reset');
            } else {
                window.location.href = "./CapaPresentacion/Menu.html";
            }
        });
        e.preventDefault();
    });
});