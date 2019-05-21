<!-- Token -->
<?php require_once('../token/initialization.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head -->
    <?php require_once('../layout/head.php'); ?>
</head>

<body>

    <!-- Header -->
    <?php require_once('../layout/header.php'); ?>

    <!-- Banner -->
    <section class="hero-banner mt-5">
        <div class="container text-center">
            <span class="hero-banner-icon"><i class="fa fa-laptop-code"></i></span>
            <h5 class="text-uppercase mb-0">Prediksi (Rekomendasi)</h5>
            <h3 class="mt-0">ARAH BIDANG KONSENTRASI MAHASISWA</h3>
            <a class="button button-header mt-5" href="#">Coba Sekarang</a>
        </div>
    </section>

    <!-- Categories -->
    <section class="section-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-intro text-center pb-3">
                    <p class="text-uppercase m-0">Metode Rekomendasi</p>
                    <img src="../assets/images/home/section-style.png" alt="">
                </div>

                <a href="../testing" class="button-choose col-6 mx-auto">
                    <div class="card-feature">
                        <h3><u>K-Nearest Neighbors</u></h3>
                        <p>Sebuah metode untuk melakukan klasifikasi terhadap objek berdasarkan data pembelajaran yang
                            jaraknya paling dekat dengan objek tersebut.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <?php require_once('../layout/footer.php'); ?>

    <!-- Javascript -->
    <?php require_once('../layout/js.php'); ?>



</body>

</html>