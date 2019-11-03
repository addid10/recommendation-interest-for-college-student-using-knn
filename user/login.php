<!-- Token -->
<?php require_once('../token/initialization.php'); ?>

<?php if(isset($_SESSION['college_student_username'])): ?>
<?php header('location: ../'); ?>
<?php elseif(isset($_SESSION['admin_username'])): ?>
<?php header('location: ../admin'); ?>
<?php else: ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head -->
    <title>Login</title>
    <?php require_once('../layout/head.php'); ?>
</head>

<body>
    <!-- Header -->
    <?php require_once('../layout/header.php'); ?>
    <section class="speaker-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="text-center">
                        <?php if(isset($_GET['status'])): ?>
                        <div class="alert alert-danger" role="alert">
                            <i class="fa fa-exclamation-circle pr-1"></i> <?= $_GET['status']; ?>
                        </div>
                        <?php endif ?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="section-intro section-intro-white text-center pb-98px">
                        <h2 class="primary-text">Login</h2>
                        <img src="../assets/images/home/section-style-white.png" alt="">
                    </div>
                </div>
                <div class="col-5 mx-auto">
                    <form id="formLogin" method="POST">
                        <div class="form-group">
                            <label for="userName" class="text-white">Username</label>
                            <input type="text" class="form-control" name="username" id="userName"
                                placeholder="Enter username" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-white">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Password" required>
                        </div>
                        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>" required>
                        <button type="submit" class="button button-contactForm w-100">Submit</button>
                        <span class="form-text mt-3 text-white text-right"><a class="text-white" href="signup"><u>SIGN
                                    UP</u></a></span>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Javascript -->
    <?php require_once('../layout/js.php'); ?>
    <script src="../assets/js/form/login.js"></script>


</body>

</html>
<?php endif ?>