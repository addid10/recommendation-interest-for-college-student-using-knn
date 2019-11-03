$('#deleteForm').click(function () {

    $.ajax({
        url: "delete.php",
        type: 'POST',
        success: function () {
            window.location.href = "../testing";
        }
    })

})