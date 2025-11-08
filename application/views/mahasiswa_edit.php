<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa oleh Nama dan NIM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>

<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Form Edit Mahasiswa</h1>
        <form action="<?php echo site_url('mahasiswa/perbaharui/' . $mahasiswa->id_mahasiswa) ?>" method="post">
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" name="nim" value="<?php echo $mahasiswa->NIM; ?>">
            </div>
            <div class="mb-3">
                <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" name="nama_mhs" value="<?php echo $mahasiswa->nama_mhs; ?>">
                <label for="id_prodi">Program Studi</label>
<select name="id_prodi" id="id_prodi" required>
    <option value="">Pilih Program Studi</option>
    <?php foreach ($prodi as $ps) : ?>
        <option value="<?= $ps->id_prodi ?>"
            <?= $mahasiswa->id_prodi == $ps->id_prodi ? 'selected' : '' ?>>
            <?= $ps->nama_prodi ?>
        </option>
    <?php endforeach; ?>
</select><br>
            </div>
            <input type="submit" class="btn btn-primary" value="Perbaharui">
        </form>
    </div>
</body>

</html>