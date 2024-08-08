<!DOCTYPE html>
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

    <title>T-Vote | Vote Selesai</title>

	<style>
		body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }
        .main {
            width: 100%;
            height: 100%;
            background: url('../assets/background.png') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            text-align: center;
            /* background-color: rgba(255, 255, 255, 0.8); */
            padding: 20px;
            border-radius: 10px;
        }

		.btn {
			background-color: #000000;
			color: #ffffff;
			border-radius: 30px;
			font-weight: bold;
			padding: 5px 20px;
		}

		.btn:hover {
			background-color: #000000;
			color: #9FC743;
		}
	</style>

</head>
<body>
<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<h3>Terima Kasih Telah Melakukan Voting</h3>
				<a href="<?php echo base_url('Voting'); ?>" class="btn">Kembali</a>
				<a href="<?php echo base_url('voting'); ?>" class="btn ">Voting Lagi</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>
