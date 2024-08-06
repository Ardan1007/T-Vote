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

    <title>E Voting | Pembelian</title>

	<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        html, body {
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #e9f5e1;
        }
        .sidebar {
            width: 300px;
            height: 100vh;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 50px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .logo img {
            width: 60%;
            margin-bottom: 50px;
            margin-left: 50px;
        }
        .menu {
            width: 80%;
            display: flex;
            flex-direction: column;
            align-items: center;
            flex-grow: 1;
        }
        .menu-item {
            background-color: #000000;
            color: #ffffff;
            border: none;
            padding: 10px;
            margin: 10px 0;
            border-radius: 30px;
            text-decoration: none;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            width: 100%;
        }
        .menu-item:hover {
            transform: scale(1);
            color: #9FC743;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .menu-item.active {
            color: #9FC743;
        }
        .logout-button {
            margin-bottom: 40px;
            width: 80%;
        }
        .main {
            width: 1000%;
            height: 100%;
            background: url('../assets/background.png');
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            flex-direction: row;
        }
        .container {
			margin-top: 5px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 30px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            width: 70%;
			height: auto;
		}

		.table-responsive {
            max-height: 400px;
            
            overflow-y: auto;
        }

		table {
            width: 100%;
            margin-bottom: 20px;
			
        }

        table th, table td {
            padding: 12px;
            
            text-align: center;
        }

        
        table img {
            max-width: 100px;
            border-radius: 8px;
        }
        .btn-primary, .btn-danger {
        text-decoration: none; 
        padding: 10px 20px; 
        color: white; 
        border-radius: 5px; 
        display: inline-block; 
        margin-right: 10px; 
		border-radius: 25px;
		}

		.btn-primary {
			background-color: #007bff; 
		}

		.btn-primary:hover {
			background-color: #0056b3; 
			text-decoration: none; 
		}

		.btn-danger {
			background-color: #dc3545; 
		}

		.btn-danger:hover {
			background-color: #c82333; 
			text-decoration: none; 
		}

		.btn-tambah {
			background-color: #000000;
            color: #ffffff;
            border-radius: 30px;
            padding: 5px 50px;
            font-size: 18px;
            font-weight: bold;
			
		}
		.btn-tambah:hover {
            background-color: #000000;
            color: #9FC743;
			text-decoration: none; 
        }

		.dataTables_wrapper .dataTables_scrollHead {
            overflow: visible !important;
        }

        .dataTables_wrapper .dataTables_scrollBody {
            overflow: auto !important;
        }

        table.dataTable thead th,
        table.dataTable tfoot th {
            position: sticky;
            top: 0;
            background: white;
            z-index: 100;
		}
    </style>

</head>
<body>
<div class="main">
    <div class="sidebar">
        <div class="logo">
            <img src="<?php echo base_url('assets/logo.png'); ?>" alt="T-Vote">
        </div>
        <div class="menu">
            <a href="<?php echo base_url('EventVote'); ?>" class="menu-item">Kelola Event Vote</a>
            <a href="<?php echo base_url('admin/pembelian'); ?>" class="menu-item active">Kelola Pembelian</a>
            <a href="<?php echo base_url('admin/admin_user'); ?>" class="menu-item">Kelola Admin</a>
			<a href="<?php echo base_url('admin/admin_voters'); ?>" class="menu-item">Kelola User</a>
            <a href="<?php echo base_url('admin/hasil_voting'); ?>" class="menu-item">Hasil Voting</a>
        </div>
        <a href="<?php echo base_url('auth/login_admin'); ?>" class="menu-item logout-button"><i class="mdi mdi-logout" style="margin-right: 10px;"></i>Keluar</a>
    </div>
		<div class="container">
			<h2 style="font-weight: bold;">Kelola Pembelian</h2>
			<!-- <div class="table-responsive"> -->
				<table id="pembelian_table" class="table">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">User ID</th>
							<th scope="col">No Invoice</th>
							<th scope="col">Jumlah Token</th>
							<th scope="col">Nominal</th>
							<th scope="col">Bukti Pembayaran</th>
							<th scope="col">Status</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($pembelian as $key => $p): ?>
							<tr>
								<td><?php echo $key + 1; ?></td>
								<td><?php echo $p['id_user']; ?></td>
								<td><?php echo $p['no_inv']; ?></td>
								<td><?php echo $p['jumlah_token']; ?></td>
								<td><?php echo $p['nominal_uang']; ?></td>
								<td>
									<img src="<?php echo base_url('/uploads/'.$p['bukti_pembayaran']); ?>" alt="Bukti Pembayaran" width="100">
								</td>
								<td>
									<?php 
									if ($p['status_validasi'] == 0) {
										echo '<span class="badge text-bg-danger">Validasi Pembayaran</span>';
									} elseif ($p['status_validasi'] == 1) {
										echo '<span class="badge text-bg-success">Validate</span>';
									}
									?>
								</td>
								<td>
									<?php if ($p['status_validasi'] != 1): ?>
										<a href="<?php echo base_url('admin/validasi_pembayaran/'.$p['id_pembelian']); ?>" class="btn btn-primary">Validasi Pembayaran</a>
									<?php elseif ($p['status_validasi'] == 1): ?>
										<a href="" class="btn btn-success">Validated</a>
									<?php endif; ?>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			<!-- </div> -->
			<!-- <br><a href="<?php echo base_url('admin/dashboard'); ?>" class="btn btn-danger mb-3">Kembali</a> -->
			<!-- <br><footer class="main-footer">
			<div class="float-right d-none d-sm-inline">
			</div>
			<br><strong>Copyright Bhayangkara University Surabaya | <a href="https://instagram.com/bianhp_" style="text-decoration: none;">M. Febryanysah H. P.</a> | <a href="https://instagram.com/jeabede" style="text-decoration: none;">Jaihan Abidin</a> | <a href="https://instagram.com/allfiann_" style="text-decoration: none;">Alfian Bahrul Alam</a> </strong>  All rights reserved.
		</footer> -->
		</div>
</div>
<script>
    $(document).ready(function() {
        $('#pembelian_table').DataTable({
		scrollY: 400,
            scrollCollapse: true,
            paging: true,
		})
    });
</script>
</body>
</html>
