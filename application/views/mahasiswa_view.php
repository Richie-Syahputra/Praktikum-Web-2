<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa oleh Richie - 2310010493</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>

<body>
  <div class="container">
    <h1 class="mt-4 mb-4">Selamat datang di Web Richie</h1>
    <a href="<?php echo site_url('mahasiswa/tambah') ?>" class="btn btn-primary mb-3">Tambah</a>
    <a href="<?php echo site_url('mahasiswa/cetak') ?>" class="btn btn-primary mb-3">Cetak</a>
    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>NO</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Program Studi</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($mahasiswa as $row) {
        ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row->NIM ?></td>
            <td><?php echo $row->nama_mhs ?></td>
            <td><?php echo $row->nama_prodi ?></td>
            <td>
              <a href="<?php echo site_url('mahasiswa/edit/' . $row->id_mahasiswa) ?>" class="btn btn-warning btn-sm">Edit</a>
              <a href="<?php echo site_url('mahasiswa/hapus/' . $row->id_mahasiswa) ?>" class="btn btn-danger btn-sm">Hapus</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>