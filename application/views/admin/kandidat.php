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

    <title>T-Vote | Kandidat</title>
</head>
<body>

<div class="container mt-5">
    <h2>Kelola Kandidat</h2>
    <a href="<?php echo base_url('kandidat/tambah'); ?>" class="btn btn-primary mb-3">Tambah Kandidat</a>
    <table id="kandidat_table" class="table">
        <thead>
            <tr>
                <th scope="col">ID Kandidat</th>
                <th scope="col">Nama Kandidat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($kandidat as $k): ?>
                <tr>
                    <td><?php echo $k['id_kandidat']; ?></td>
                    <td><?php echo $k['nama_kandidat']; ?></td>
                    <td>
                        <a href="<?php echo base_url('kandidat/edit/'.$k['id_kandidat']); ?>" class="btn btn-warning">Edit</a>
                        <a href="<?php echo base_url('kandidat/hapus/'.$k['id_kandidat']); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kandidat ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <br><footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
    </div>
    <br><strong>Copyright Bhayangkara University Surabaya | <a href="https://instagram.com/bianhp_" style="text-decoration: none;">M. Febryanysah H. P.</a> | <a href="https://instagram.com/jeabede" style="text-decoration: none;">Jaihan Abidin</a> | <a href="https://instagram.com/allfiann_" style="text-decoration: none;">Alfian Bahrul Alam</a> </strong>  All rights reserved.
</footer>
</div>

<script>
    $(document).ready(function() {
        $('#kandidat_table').DataTable();
    });
</script>
</body>
</html>
