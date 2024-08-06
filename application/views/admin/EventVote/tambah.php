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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <title>E Voting | Tambah Event Vote</title>

    <style>
        body, html {
            height: 100%;
            margin: 0;
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
            flex-direction: row;
        }

        .header{
            display: flex;
            margin-bottom: 20px;
            text-align: center;
        }

        .back-icon {
            font-size: 24px;
            margin-right: 20px;
            color: #000000;
            transition: color 0.3s ease;
        }
        .back-icon:hover {
            color: #ffffff;
        }

        .card-title {
            font-weight: 800;
            font-size: 25px;
            margin-left: 10px;
            margin-right: 130px;
        }

        .form-control {
            border-radius: 30px;
        }
        .btn {
            background-color: #000000;
            color: #ffffff;
            border-radius: 30px;
            padding: 5px 50px;
            font-size: 18px;
            font-weight: bold; 
        }

        .btn:hover {
            background-color: #000000;
            color: #9FC743;
        }
    </style>

</head>
<body>
<div class="main">
    <div class="container mt-5">
        <div class="header">
            <a href="<?php echo base_url('EventVote'); ?>" class="back-icon"><i class="fas fa-arrow-left"></i></a>
            <h2 class="card-title" style="font-weight: bold;">Tambah Event Vote</h2>
        </div>

        <?php if(validation_errors() == TRUE): ?>
            <div class="alert alert-danger" role="alert"><?php echo validation_errors(); ?></div>
        <?php endif; ?>
        <?php if(isset($error)): ?>
            <div class="alert alert-danger" role="alert"> <?php echo $error; ?> </div>
        <?php endif; ?>
        <?php echo form_open('admin/tambahEventVote'); ?>
            <div class="mb-3">
                <label for="nama_EventVote" class="form-label">Nama Event</label>
                <input type="text" class="form-control" name="nama_EventVote" placeholder="Masukan Nama Event" value="<?php echo set_value('nama_EventVote'); ?>">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" placeholder="Masukan Deskripsi Event" value="<?php echo set_value('deskripsi'); ?>">
            </div>

            <button type="submit" class="btn btn-tambah">Tambah</button>
        <?php echo form_close(); ?>
    </div>
</div>
</body>
</html>
