
<?php require_once('../../token/initialization.php'); ?>

<?php if(isset($_SESSION['admin_username'])): ?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <!-- Head --> 
    <?php require_once('../layout/head.php'); ?>
</head>

<body>
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        
    <!-- Menu -->
    <?php require_once('../layout/menu.php'); ?>
        
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">No.</th>
                                            <th class="border-top-0">Fullname</th>
                                            <th class="border-top-0">Euclidean Distance</th>
                                            <th class="border-top-0">Hasil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php require_once('index.testing_data.php'); ?>
                                        <?php foreach($results as $data): ?>
                                        <tr>
                                            <td class="txt-oflo"><?= $no++ ?></td>
                                            <td class="txt-oflo"><?= $data->fullname ?></td>
                                            <td class="txt-oflo"><?= $data->euclidean_distance ?></td>
                                            <td><span class="font-medium"><?= $data->result_name ?></span></td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?php require_once('../layout/footer.php'); ?>
        </div>
    </div>

    <?php require_once('../layout/js.php'); ?>
</body>

</html>


<?php else: ?>
<?php header('location: ../../user/login'); ?>
<?php endif ?>