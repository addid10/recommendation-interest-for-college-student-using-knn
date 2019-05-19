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

    <!-- Result -->
    <section class="section-padding mb-5 pb-5">
        <div class="container">
            <div class="section-intro text-center pb-5">
                <p class="section-intro__title">Hasil</p>
                <h2 class="primary-text">Rekomendasi Arah Bidang Konsentrasi</h2>
                <img src="assets/images/home/section-style.png" alt="">
            </div>

            <div class="row mt=5">
                <div class="col-xl-10 offset-xl-1">
                    <div class="scheduleTab">
                        <ul class="nav nav-tabs">
                            <li class="nav-item text-center">
                                <a data-toggle="tab" href="#topsis">
                                    <h4>Metode TOPSIS</h4>
                                </a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="active" data-toggle="tab" href="#k_nearest_neighbors">
                                    <h4>K-Nearest Neighbors</h4>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="topsis" class="tab-pane">
                                <div class="schedule-card">
                                    <div class="row no-gutters">
                                        <div class="col-md-3">
                                            <div class="card-identity">
                                                <img src="assets/images/testimonial/testimonial1.png" alt="">
                                                <h3>Adam Jamsmith</h3>
                                                <p>UX/UI Designer</p>
                                            </div>
                                        </div>
                                        <div class="col-md-9 align-self-center">
                                            <div class="schedule-content">
                                                <p class="schedule-date">9.00 AM - 10.30 AM</p>
                                                <a class="schedule-title" href="#">
                                                    <h3>Previous Year achivement</h3>
                                                </a>
                                                <p>And wherein Beginning of you cattle fly had was deep wherein darkness
                                                    behold male called evening gathering moving bring fifth days he
                                                    lights dry cattle you open seas midst let and in wherein beginning
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="k_nearest_neighbors" class="tab-pane active">
                            <?php require_once('result.k_nearest_neighbors.php'); ?>
                            <?php foreach($resultKnn as $dataKnn): ?>
                                <div class="schedule-card">
                                    <div class="row no-gutters">
                                        <div class="col-md-3">
                                            <div class="card-identity">
                                                <img src="assets/images/interest/<?= $dataKnn->result_icon ?>" alt="">
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
                                                <p class="mt-2 text-uppercase" style="color:#000">Kemungkinan Dosen Pembimbing:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once('layout/footer.php'); ?>


    <!-- Javascript -->
    <?php require_once('layout/js.php'); ?>


</body>

</html>


<?php else: ?>
<?php header('location: login'); ?>
<?php endif ?>