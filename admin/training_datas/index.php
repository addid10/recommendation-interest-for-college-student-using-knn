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
                        <h4 class="page-title">Training Datas</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header text-right">
                                <button class="btn btn-primary btn-round" id="trainAdd" data-toggle="modal"
                                    data-target="#trainModal">Add Training Data</button>
                            </div>
                            <div class="card-body">
                                <?php require_once('index.data.php'); ?>
                                <h4 class="card-title">Training Datas Table</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table" id="trainTable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th rowspan='2' scope="col">#</th>
                                            <th rowspan='2' scope="col">Name</th>
                                            <th colspan='<?= $countFeature;?>'>Features</th>
                                            <th rowspan='2' scope="col">Result</th>
                                            <th colspan='2' rowspan='2' scope="col">Action</th>
                                        </tr>
                                        <tr>
                                            <?php foreach($feature as $f): ?>
                                            <th><?= $f ?></th>
                                            <?php endforeach ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($data as $name =>$score): ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $name ?></td>
                                            <?php foreach($feature as $f): ?>
                                            <td class="text-center"><?= $score[$f] ?></td>
                                            <?php endforeach ?>
                                            <td><?= $score["Hasil"] ?></td>
                                            <td><button type="button" id="<?= $score["Id"] ?>" class="btn btn-danger delete">Delete</button></td>
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
            <?php require_once('modal.php'); ?>
            <?php require_once('../layout/footer.php'); ?>
        </div>
    </div>

    <?php require_once('../layout/js.php'); ?>
    <script type="text/javascript" src="training.js"></script>
</body>

</html>


<?php else: ?>
<?php header('location: ../../user/login'); ?>
<?php endif ?>