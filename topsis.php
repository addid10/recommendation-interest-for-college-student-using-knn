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
				<form class="form-register" action="#" method="post">
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
							<span class="step-text">Data Testing</span>
						</h2>
						<section>
							<div class="inner">
                                <h3>Masukkan <i>data</i> sesuai variabel berikut</h3>
                                <form method="POST"></form>
							</div>
						</section>
						<!-- Hasil -->
						<h2>
							<span class="step-icon"><i class="zmdi zmdi-money"></i></span>
							<span class="step-text">Hasil</span>
						</h2>
						<section>
							<div class="inner">
								<h3>Financing Information</h3>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<select name="inventory" id="inventory">
											<option value="Buy Inventory" disabled selected>Buy Inventory</option>
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div id="checkbox">
										<span>Do you have existing business financing?: </span>
										<input type="checkbox" name="vehicle1" value="Yes"> Yes
										<input type="checkbox" name="vehicle2" value="No"> No
									</div>
								</div>
								<h4>Existing Balance </h4>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" name="business" id="business" class="form-control"
												required>
											<span class="label">Business</span>
											<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" name="balance" id="balance" class="form-control"
												required>
											<span class="label">Current Balance</span>
											<span class="border"></span>
										</label>
									</div>
								</div>
							</div>
						</section>
					</div>
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