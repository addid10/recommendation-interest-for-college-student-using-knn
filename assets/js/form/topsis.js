$(function () {
    $('#finishForm').on('click', function (e) {
        e.preventDefault();
        $('#topsisForm').submit();
    });
});