<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.steps.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
    (
        function ($) {
            window.csrf = {
                csrf_token: '<?= $_SESSION['csrf_token']; ?>'
            };
            $.ajaxSetup({
                data: window.csrf
            });
        }(jQuery)
    );
</script>