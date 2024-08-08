<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('uploads/icon/evt.png'); ?>" rel="icon" type="image/x-icon">
    <link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> 

    <title>E Voting | Reset Kata Sandi</title>

	<style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        margin: 0;
        display: flex;
        min-height: 100vh;
    }
    .wrapper {
        display: flex;
        flex: 1;
    }
    .form-container {
        width: 50%;
        padding: 50px;
        max-width: 400px;
        margin: auto;
        margin-left: 150px;
    }
    .illustration {
        width: 50%;
        background-color: #9FC743;
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .illustration img {
        max-width: 100%;
        height: auto;
    }
    .card {
        border: none;
        margin: -50px;
    }
    .card-title {
        font-weight: 800;
        font-size: 16px;
        margin-left: 60px;
        margin-right: 115px;
    }
    .form-control {
        border-radius: 30px;
        background-color: #F7F7F7;
        border: none;
        padding: 14px;
        height: 60px; 
    }
    
    .btn-custom {
        border-radius: 30px;
        background-color: #000000;
        color: #FFFFFF;
        padding: 14px;
		margin-top: 10px;
        width: 100%;
        font-weight: 800;
        font-size: 18px;
    }
    .btn-custom:hover {
        background-color: #9FC743;
        transform: scale(1);
        color: #000000;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }
    .form-label {
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 600;
    }
    .back-icon {
        font-size: 24px;
        margin-right: 20px;
        color: #000000;
        transition: color 0.3s ease;
    }
    .back-icon:hover {
        color: #9FC743;
    }
    .header {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        text-align: center;
    }
    .error-message {
        color: red;
        margin-top: 0px; 
        text-align: center;
    }
    .text-center {
        margin-top: 5px;
    }
    
</style>
</head>
<body>
<div class="wrapper">
    <div class="form-container">
		<div class="card">
		<div class="header">
                    <a href="<?php echo base_url('auth/pertanyaan'); ?>" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                    <h2 class="card-title">Reset Kata Sandi</h2>
                </div>
			<!-- <h2 class="card-title text-center mb-4">Reset Kata Sandi</h2> -->
			<?php if (validation_errors()): ?>
				<div class="alert alert-danger" role="alert"><?php echo validation_errors(); ?></div>
			<?php endif; ?>
			<?php if (isset($error)): ?>
				<div class="alert alert-danger" role="alert"><?php echo $error; ?></div>
			<?php endif; ?>
			<?php echo form_open('auth/reset_password'); ?> 
				<div class="mb-3">
					<label for="new_password" class="form-label">Kata Sandi Baru</label>
					<input type="password" name="new_password" class="form-control" placeholder="Masukan Kata Sandi Baru" id="new_password" required>
				</div>
				<div class="mb-3">
					<label for="confirm_password" class="form-label">Konfirmasi Kata Sandi</label>
					<input type="password" name="confirm_password" class="form-control" placeholder="Konfirmasi Kata Sandi Baru" id="confirm_password" required>
				</div>
				<div class="mb-3">
					<button type="submit" class="btn btn-custom">Ubah Kata Sandi</button>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
        <!-- <br><footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
    </div>
    <br><strong>Copyright Bhayangkara University Surabaya | <a href="https://instagram.com/bianhp_" style="text-decoration: none;">M. Febryanysah H. P.</a> | <a href="https://instagram.com/jeabede" style="text-decoration: none;">Jaihan Abidin</a> | <a href="https://instagram.com/allfiann_" style="text-decoration: none;">Alfian Bahrul Alam</a> </strong>  All rights reserved.
    </footer>
    </div> -->
	<div class="illustration">
        <img src="<?php echo base_url('assets/login.png'); ?>" alt="Illustration">
    </div>
</div>

<script>
	
	document.getElementById('confirm_password').oninput = function () {
		const password = document.getElementById('new_password').value;
		const confirmPassword = document.getElementById('confirm_password').value;

		if (password !== confirmPassword) {
			document.getElementById('confirm_password').setCustomValidity('Passwords do not match.');
		} else {
			document.getElementById('confirm_password').setCustomValidity('');
		}
	};
</script>
</body>
</html>
