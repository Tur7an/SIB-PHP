<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Form Input Nilai Mahasiswa</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">    
    <h2 align="center">Form Nilai Ujian</h2>  
    <form action="hasil_objMahasiswa.php" method="POST">
        <div class="row mb-3">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nim" id="nim">
            </div>
        </div>
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Kuliah</legend>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="kuliah">
                    <option selected disabled>--- Pilih Kuliah ---</option>
                    <option value="Universitas Muhammadiyah Bengkulu">Universitas Muhammadiyah Bengkulu</option>
                    <option value="Universitas Bengkulu">Universitas Bengkulu</option>
                    <option value="Universitas Prof Dr Hazairin SH Bengkulu">Universitas Prof Dr Hazairin SH Bengkulu</option>
                </select>
            </div>
        </fieldset>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Mata Kuliah</legend>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="mk">
                    <option selected disabled>--- Pilih Mata Kuliah ---</option>
                    <option value="Pemrograman PHP">Pemrograman PHP</option>
                    <option value="Pemrograman JavaScript">Pemrograman JavaScript</option>
                    <option value="Database MySQL/MariaDB">Database MySQL/MariaDB</option>
                </select>
            </div>
        </fieldset>
        <div class="row mb-3">
            <label for="nilai" class="col-sm-2 col-form-label">Nilai</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nilai" id="nilai">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>