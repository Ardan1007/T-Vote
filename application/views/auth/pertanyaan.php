<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('uploads/icon/evt.png'); ?>" rel="icon" type="image/x-icon">
    <link href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> 

    <title>T-Vote | Konfirmasi Keamanan</title>

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
        margin-left: 40px;
        margin-right: 90px;
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
        margin-top: 0px; /* Atur jarak antara pesan error dan tombol */
        text-align: center;
    }
    .text-center {
        margin-top: 5px;
    }
    /* Loader Styles */
    .loader-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }
    .loader {
        border: 16px solid #f3f3f3;
        border-top: 16px solid #000000;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 5s linear infinite;
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

</head>
<body>
<div class="wrapper">
    <div class="form-container">
        
                <div class="card">
                    <div class="card-body"> 
					<div class="header">
						<a href="<?php echo base_url('auth/confirmuser'); ?>" class="back-icon"><i class="fas fa-arrow-left"></i></a>
						<h2 class="card-title">Konfirmasi Keamanan</h2>
					</div>                 
                        <!-- <h2 class="card-title text-center mb-4">Pertanyaan Konfirmasi Keamanan</h2> -->
                        <?php if(validation_errors() == TRUE): ?>
                            <div class="alert alert-danger" role="alert"><?php echo validation_errors(); ?></div>
                        <?php endif; ?>
                        <?php if(isset($error)): ?>
                            <div class="alert alert-danger" role="alert"> <?php echo $error; ?> </div>
                        <?php endif; ?>
                        <?php echo form_open('auth/verify_security_question'); ?>
                            <!-- <div class="mb-3">
                                <input type="text" name="pertanyaan" class="form-control" value="<?php echo $this->session->userdata('pertanyaan'); ?>" readonly>
                            </div> -->
                            <div class="mb-3">
                                <label for="jawaban" class="form-label"><?php echo $this->session->userdata('pertanyaan'); ?></label>
                                <input type="text" name="jawaban" class="form-control" id="jawaban" placeholder="Masukan Jawaban" value="<?php echo set_value('jawaban'); ?>">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-custom">Konfirmasi</button>
                            </div>

                        <?php echo form_close();  ?>
                        
                    </div>
        </div>
        <br><footer class="main-footer">
    <!-- <div class="float-right d-none d-sm-inline">
    </div>
    <br><strong>Copyright Bhayangkara University Surabaya | <a href="https://instagram.com/bianhp_" style="text-decoration: none;">M. Febryanysah H. P.</a> | <a href="https://instagram.com/jeabede" style="text-decoration: none;">Jaihan Abidin</a> | <a href="https://instagram.com/allfiann_" style="text-decoration: none;">Alfian Bahrul Alam</a> </strong>  All rights reserved.
    </footer> -->
    </div>
	<div class="illustration">
        <img src="<?php echo base_url('assets/login.png'); ?>" alt="Illustration">
    </div>
</div>
</body>
</html>
