<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Program Studi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>

<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Daftar Program Studi</h1>
        <a href="<?php echo site_url('prodi/tambah') ?>" class="btn btn-primary mb-3">Tambah Prodi Baru</a>
        <br><br>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>NO</th>
                    <th>Kode Prodi</th>
                    <th>Nama Prodi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($prodi as $row) { ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->kode_prodi; ?></td>
                        <td><?php echo $row->nama_prodi; ?></td>
                        <td>
                            <a href="<?php echo site_url('prodi/edit/' . $row->id_prodi) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?php echo site_url('prodi/hapus/' . $row->id_prodi) ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>