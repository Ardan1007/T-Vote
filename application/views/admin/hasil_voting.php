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

    <title>E Voting | Hasil Voting</title>

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
        
        .menu-item2 {
            color: #000000;
            padding: 15px;
            margin: 5px 0;
            text-decoration: none;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
        }

        .logout-button {
            margin-bottom: 40px; 
            width: 80%;
        }

        .main {
            width: 100%;
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

        .header {
            position: absolute;
            top: 20px;
            right: 50px;
            display: flex;
            align-items: center;
        }

        .header span {
            font-size: 1.2em;
            margin-right: 10px;
        }

        .profile-circle {
            width: 40px;
            height: 40px;
            border: 2px solid #000;
            border-radius: 50%;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
            padding: 20px;
            margin-left: 200px; 
            margin-right: 200px;
        }

        .content h1 {
            color: #000000;
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .content p {
            font-size: 1em;
            color: #666666;
        }

        .illustration {
            margin-bottom: 20px;
        }

        .illustration img {
            width: 100%;
            max-width: 400px;
        }
        
		/* .container {
			border-radius: 30px;
		} */

        .card {
            background-color: #9FC743;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
            padding: 10px;
			border: none;
            border-radius: 30px;
        }

        .card-title {
            font-size: 2.5em;
            font-weight: bold;
			border-radius: 30px;
        }

        .btn {
            background-color: #000000;
            color: #ffffff;
            border-radius: 30px;
            padding: 5px 50px;
            font-size: 16px;
            font-weight: bold;
			margin-left: 300px;
        }
        
        .btn:hover {
            background-color: #000000;
            color: #9FC743;
        }
		.container {
			margin-top: 20px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 30px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            width: 70%;
			height: 80%;
		}
		table {
            width: 100%;
            margin-bottom: 20px;
			
        }

        table th, table td {
            padding: 12px;
            
            text-align: center;
        }

        table th {
            background-color: #f2f2f2;
        }

</style>

</head>
<body>
<div class="main">
        <div class="sidebar">
            <div class="logo">
                <img src="../assets/logo.png" alt="T-Vote">
            </div>
            <div class="menu">
                <a href="<?php echo base_url('EventVote'); ?>" class="menu-item ">Kelola Event Vote</a>
                <a href="<?php echo base_url('admin/pembelian'); ?>" class="menu-item">Kelola Pembelian</a>
                <a href="<?php echo base_url('admin/admin_user'); ?>" class="menu-item">Kelola Admin</a>
				<a href="<?php echo base_url('admin/admin_voters'); ?>" class="menu-item">Kelola User</a>
                <a href="<?php echo base_url('admin/hasil_voting'); ?>" class="menu-item active">Hasil Voting</a>
            </div>
            <a href="<?php echo base_url('auth/login_admin'); ?>" class="menu-item logout-button"><i class="mdi mdi-logout" style="margin-right: 10px;"></i>Keluar</a>
        </div>
    <div class="container mt-5">
        <h2 class="mb-4" style="font-weight: bold;">Hasil Voting</h2>
        <table class="table table-responsive" id=table_hsl>
            <thead>
                <tr>
                    <th scope="col">ID Kandidat</th>
                    <th scope="col">Foto Kandidat</th>
                    <th scope="col">Nama Kadidat</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Jumlah Suara</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($votes as $vote): ?>
                    <tr>
                        <td><?php echo $vote['id_kandidat']; ?></td>
                        
                            <?php foreach($kandidat as $k): ?>
                                <?php if ($vote['id_kandidat'] == $k['id']): ?>
                                    <td><img src="../foto_kandidat/<?php echo $k['foto_kandidat']?>" style="width: 50px;" alt=""></td>
                                    <td><?php echo $k['nama'] ?></td>
                                    <td><?php echo $k['nama_event'] ?></td>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <td><?php echo $vote['total_suara']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- <br><a href="<?php echo base_url('admin/dashboard'); ?>" class="btn btn-danger mb-3">Kembali</a> -->
        <script>
            $(document).ready(function() {
                $('#table_hsl').DataTable();
            });
        </script>
        <!-- <br><footer class="main-footer">
        <div class="float-right d-none d-sm-inline">
        </div>
        <br><strong>Copyright Bhayangkara University Surabaya | <a href="https://instagram.com/bianhp_" style="text-decoration: none;">M. Febryanysah H. P.</a> | <a href="https://instagram.com/jeabede" style="text-decoration: none;">Jaihan Abidin</a> | <a href="https://instagram.com/allfiann_" style="text-decoration: none;">Alfian Bahrul Alam</a> </strong>  All rights reserved.
    </footer> -->
    </>
</div>
</body>
</html>
