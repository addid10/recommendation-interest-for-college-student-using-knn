$(document).ready(function () {

    $('#confirmPassword').keyup(function () {
        let pass = $('#password').val();
        let confirm = $('#confirmPassword').val();

        if (pass == confirm) {
            $('#confirmPassword').addClass('is-valid').removeClass('is-invalid');
            $('#confirmStatus').addClass('valid-feedback').removeClass('invalid-feedback').html("Password cocok!");
        } else {
            $('#confirmPassword').addClass('is-invalid').removeClass('is-valid');
            $('#confirmStatus').addClass('invalid-feedback').removeClass('valid-feedback').html("Password tidak cocok!")
        }
    })
});

//Registrasi
$(document).on('submit', '#formRegistration', function (e) {
    e.preventDefault();
    let name = $('#fullName').val();
    let user = $('#userName').val();
    let pass = $('#password').val();

    if (user !== '' && pass !== '' && name !== '') {
        $.ajax({
            url: "signup.server.php",
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
})