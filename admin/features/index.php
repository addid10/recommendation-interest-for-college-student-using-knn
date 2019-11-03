<?php require_once('../../token/initialization.php'); ?>

<?php if(isset($_SESSION['admin_username'])): ?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <!-- Head -->
    <?php require_once('../layout/head.php'); ?>
</head>

<body>
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">

        <!-- Menu -->
        <?php require_once('../layout/menu.php'); ?>

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Features</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header text-right">
                                <button class="btn btn-primary btn-round" id="featureAdd" data-toggle="modal"
                                    data-target="#featureModal">Add Feature</button>
                            </div>
                                <table class="table" id="featureTable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Variable</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Categories</th>
                                            <th width="10%">Option</th>
                                            <th width="10%">Update</th>
                                            <th width="10%">Delete</th>
                                        </tr>
                                    </thead>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?php require_once('modal.php'); ?>
            <?php require_once('../layout/footer.php'); ?>
        </div>
    </div>

    <?php require_once('../layout/js.php'); ?>
    <script type="text/javascript" src="feature.js"></script>
</body>

</html>


<?php else: ?>
<?php header('location: ../../user/login'); ?>
<?php endif ?>