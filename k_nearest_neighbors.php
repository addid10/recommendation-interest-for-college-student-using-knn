<!-- Token -->
<?php require_once('token/initialization.php'); ?>

<?php if(isset($_SESSION['college_student_username'])): ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head -->
    <?php require_once('layout/head.php'); ?>
</head>

<body>
    <!-- Header -->
    <?php require_once('layout/header.php'); ?>

    <!-- Start -->

    <div class="page-content" style="background-image: url('assets/images/wizard-v4.jpg')">
        <div class="wizard-v4-content">
            <div class="wizard-form">
                <div class="wizard-header">
                    <h3 class="heading">K-NEAREST NEIGHBORS</h3>
                </div>
                <form class="form-register" method="POST" id="knnForm">
                    <div id="form-total">
                        <!-- Keterangan -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-info"></i></span>
                            <span class="step-text">Keterangan</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <h3>Keterangan:</h3>
                            </div>
                        </section>
                        <!-- Data Training -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-lock"></i></span>
                            <span class="step-text">Data Training</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <h3>Data Training</h3>
                                <?php require_once('k_nearest_neighbors.training_data.php'); ?>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Sepal.Length</th>
                                            <th>Sepal.Width</th>
                                            <th>Species</th>
                                        </tr>
                                        <?php foreach($trainingDatas as $data): ?>
                                        <tr>
                                            <td><?= $data->var_f20 ?></td>
                                            <td><?= $data->var_f21 ?></td>
                                            <td><?= $data->result ?></td>
                                        </tr>
                                        <?php endforeach ?>
                                    </table>
                                </div>
                            </div>
                        </section>
                        <!-- Data Testing  -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
                            <span class="step-text">Data Nilai</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <h3>Masukkan <i>data</i> nilai sesuai mata kuliah berikut</h3>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="lengthData">Sepal.Length</label>
                                        <input type="text" class="form-control" name="length" id="lengthData"
                                            placeholder="Length" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="widthData">Sepal.Width</label>
                                        <input type="text" class="form-control" name="width" id="widthData"
                                            placeholder="Width" required>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Hasil -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-money"></i></span>
                            <span class="step-text">IPK & Dosen Pembimbing</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <h3>Financing Information</h3>
                            </div>
                        </section>
                    </div>
                    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>" required>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require_once('layout/footer.php'); ?>


    <!-- Javascript -->
    <?php require_once('layout/js.php'); ?>


</body>

</html>


<?php else: ?>
<?php header('location: login'); ?>
<?php endif ?>