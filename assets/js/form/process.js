$('#finishForm').on('click', function (e) {
    e.preventDefault();
    let length = $('#lengthData').val();
    let width = $('#widthData').val();

    if (length !== '' && width !== '') {
        $.ajax({
            url: "k_nearest_neighbors.server.php",
            type: 'POST',
            data: {
                length: length,
                width: width
            },
            success: function () {
                window.location.href = "result";
            }
        })
    } else {
        alert("Isi data dengan benar!");
    }
});