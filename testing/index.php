<!-- Token -->
<?php require_once('../token/initialization.php'); ?>

<?php if(isset($_SESSION['college_student_username'])): ?>

<!-- Check -->
<?php require_once('index.check.php'); ?>

<?php if($total == 0): ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head -->
    <?php require_once('../layout/head.php'); ?>
</head>

<body>
    <!-- Header -->
    <?php require_once('../layout/header.php'); ?>

    <!-- Start -->

    <div class="page-content speaker-bg">
        <div class="wizard-v4-content">
            <div class="wizard-form">
                <div class="wizard-header">
                    <h3 class="heading">K-NEAREST NEIGHBORS</h3>
                </div>
                <form class="form-register" method="POST" id="testForm" action="index.server.php">
                    <div id="form-total">
                        <!-- Keterangan -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-info"></i></span>
                            <span class="step-text">Keterangan</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <h3>Keterangan:</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Konversi Nilai</label>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Huruf</th>
                                                    <th>Angka</th>
                                                </tr>
                                                <tr>
                                                    <td>A</td>
                                                    <td>4.00</td>
                                                </tr>
                                                <tr>
                                                    <td>A-</td>
                                                    <td>3.75</td>
                                                </tr>
                                                <tr>
                                                    <td>B+</td>
                                                    <td>3.50</td>
                                                </tr>
                                                <tr>
                                                    <td>B</td>
                                                    <td>3.00</td>
                                                </tr>
                                                <tr>
                                                    <td>B-</td>
                                                    <td>2.75</td>
                                                </tr>
                                                <tr>
                                                    <td>C+</td>
                                                    <td>2.50</td>
                                                </tr>
                                                <tr>
                                                    <td>C</td>
                                                    <td>2.00</td>
                                                </tr>
                                                <tr>
                                                    <td>C-</td>
                                                    <td>1.75</td>
                                                </tr>
                                                <tr>
                                                    <td>D+</td>
                                                    <td>1.50</td>
                                                </tr>
                                                <tr>
                                                    <td>D</td>
                                                    <td>1.00</td>
                                                </tr>
                                                <tr>
                                                    <td>E</td>
                                                    <td>0.00</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <label class="mt-3">Konversi Platform</label>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Konversi</th>
                                                </tr>
                                                <tr>
                                                    <td>Tanpa platform</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>Website</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>Mobile</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>Desktop</td>
                                                    <td>3</td>
                                                </tr>
                                                <tr>
                                                    <td>Mikrokontroller</td>
                                                    <td>4</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Konversi Jenis Kelamin</label>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Huruf</th>
                                                    <th>Konversi</th>
                                                </tr>
                                                <tr>
                                                    <td>Laki-laki</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>Perempuan</td>
                                                    <td>2</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <label class="mt-3">Konversi Dosen Pembimbing</label>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Konversi</th>
                                                </tr>
                                                <tr>
                                                    <td>Husnul Khatimi, S.T., M.T</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuslena Sari, S.Kom., M.Kom</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>Muhammad Alkaff, S.Kom., M.Kom</td>
                                                    <td>3</td>
                                                </tr>
                                                <tr>
                                                    <td>Juhriyansyah Dalle, Ph.D</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td>Eka Setya Wijaya, S.T., M.Kom</td>
                                                    <td>5</td>
                                                </tr>
                                                <tr>
                                                    <td>Lainnya</td>
                                                    <td>0</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
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
                                <?php require_once('index.training_data.php'); ?>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th rowspan='2'>No.</th>
                                                <th rowspan='2'>Nama</th>
                                                <th colspan='<?php echo $countFeature;?>'>Fitur</th>
                                                <th rowspan='2'>Hasil</th>
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
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
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
                                <h3>Masukkan <i>data</i> sesuai format berikut</h3>
                                <div class="form-row">
                                    <?php foreach($featureNames as $f => $key): ?>
                                        <?php if($key["Input"] == "input"): ?>
                                            <div class="form-group col-md-6">
                                                <label><?= $key["Name"] ?> (<?= $key["Variable"] ?>)</label>
                                                <input type="text" class="form-control" name="score[]"
                                                    placeholder="<?= $key["Name"] ?>" required>
                                            </div>
                                        <?php elseif($key["Input"] == "select"): ?>
                                            <?php require('index.option.php'); ?>
                                            <div class="form-group col-md-6">
                                                <label><?= $key["Name"] ?> (<?= $key["Variable"] ?>)</label>
                                                <select class="form-control" name="score[]">
                                                    <?php foreach($optionDatas as $option): ?>
                                                        <option value="<?= $option->option_value ?>"><?= $option->option_name ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </section>
                    </div>
                    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>" required>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require_once('../layout/footer.php'); ?>


    <!-- Javascript -->
    <?php require_once('../layout/js.php'); ?>
    <script src="../assets/js/process.js"></script>
    <script src="../assets/js/form/finish.js"></script>


</body>

</html>


<?php else: ?>
<?php header('location: ../result'); ?>
<?php endif ?>


<?php else: ?>
<?php header('location: ../user/login'); ?>
<?php endif ?>