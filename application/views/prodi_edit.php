<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Prodi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>

<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Form Edit Prodi</h1>
        <form action="<?php echo site_url('prodi/perbaharui/' . $prodi->id_prodi) ?>" method="post">
            <div class="mb-3">
                <label for="kode_prodi" class="form-label">Kode Prodi</label>
                <input type="text" class="form-control" name="kode_prodi" value="<?php echo $prodi->kode_prodi; ?>">
            </div>
            <div class="mb-3">
                <label for="nama_prodi" class="form-label">Nama Prodi</label>
                <input type="text" class="form-control" name="nama_prodi" value="<?php echo $prodi->nama_prodi; ?>">
            </div>
            <input type="submit" class="btn btn-primary" value="Perbaharui">
        </form>
    </div>
</body>

</html>