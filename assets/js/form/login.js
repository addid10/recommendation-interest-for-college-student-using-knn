//Login
$('#formLogin').on('submit', function (e) {
    e.preventDefault();
    let username = $('#username').val();
    let password = $('#password').val();

    if (username !== '' && password !== '') {
        $.ajax({
            url: "login.server.php",
            type: 'POST',
            data: new FormData(this),
            dataType: "json",
            contentType: false,
            processData: false,
            success: function (data) {
                window.location.href = data.result;
            }
        })
    } else {
        alert("Isi data dengan benar!");
    }
});