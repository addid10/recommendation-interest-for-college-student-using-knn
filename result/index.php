<!-- Token -->
<?php require_once('../token/initialization.php'); ?>

<?php if(isset($_SESSION['college_student_username'])): ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head -->
    <?php require_once('../layout/head.php'); ?>
</head>

<body>
    <!-- Header -->
    <?php require_once('../layout/header.php'); ?>

    <!-- Result -->
    <section class="section-padding mb-5 pb-5">
        <div class="container">
            <div class="section-intro text-center pb-5">
                <p class="section-intro__title text-uppercase">Hasil Pengunaan K-Nearest Neighbor</p>
                <h2 class="primary-text">Arah Bidang Konsentrasi</h2>
                <img src="../assets/images/home/section-style.png" alt="">
            </div>

            <div class="row mt=5">
                <div class="col-xl-10 offset-xl-1">
                    <div class="scheduleTab">
                        <ul class="nav nav-tabs">
                            <li class="nav-item text-center">
                                <a class="active" data-toggle="tab" href="#k_nearest_neighbors">
                                    <h4>Hasil Prediksi Rekomendasi</h4>
                                </a>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-end">
                            <button class="button button-edit mt-0" id="deleteForm">Coba lagi</button>
                        </div>
                        <div class="tab-content">
                            <div id="k_nearest_neighbors" class="tab-pane active">
                                <?php require_once('index.datas.php'); ?>
                                <?php if($statusData): ?>
                                <?php foreach($resultKnn as $dataKnn): ?>
                                <div class="schedule-card">
                                    <div class="row no-gutters">
                                        <div class="col-md-3">
                                            <div class="card-identity">
                                                <img src="../assets/images/interest/<?= $dataKnn->result_icon ?>"
                                                    alt="">
                                                <h3>#<?= $rankingKnn++ ?></h3>
                                                <p><?= $dataKnn->result_name ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-9 align-self-center">
                                            <div class="schedule-content">
                                                <a class="schedule-title" href="#">
                                                    <h3><?= $dataKnn->result_name ?></h3>
                                                </a>
                                                <p><?= $dataKnn->result_description ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once('../layout/footer.php'); ?>


    <!-- Javascript -->
    <?php require_once('../layout/js.php'); ?>
    <script src="../assets/js/form/result.js"></script>


</body>

</html>


<?php else: ?>
<?php header('location: ../user/login'); ?>
<?php endif ?>