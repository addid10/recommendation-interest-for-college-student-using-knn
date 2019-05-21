$(function () {
    $('#finishForm').on('click', function (e) {
        e.preventDefault();
        $('#testForm').submit();
        // let length = $('#lengthData').val();
        // let width = $('#widthData').val();

        // if (length !== '' && width !== '') {
        //     $.ajax({
        //         url: "index.server.php",
        //         type: 'POST',
        //         data: {
        //             length: length,
        //             width: width
        //         },
        //         success: function () {
        //             window.location.href = "result";
        //         }
        //     })
        // } else {
        //     alert("Isi data dengan benar!");
        // }
    });
    $(document).ready(function () {
        $('ul[role=tablist]').addClass('topsis');
    })
});