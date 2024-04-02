<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Daftar Hasil Ujian Mahasiswa</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .center {
            margin: auto;
            width: 90%;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once 'Mahasiswa.php';
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kuliah = $_POST['kuliah'];
        $mk = $_POST['mk'];
        $nilai = $_POST['nilai'];

        $ns1 = new Mahasiswa($nim, $nama, $kuliah, $mk, $nilai);
    ?>
        <h2 align="center">Daftar Nilai Ujian Mahasiswa Siswa</h2>
        <form action="objMahasiswa.php">
            <button class="btn btn-primary" type="submit">Kembali</button>
        </form>
        <table class="table table-dark table-hover" style=" margin: auto;
            width: 90%;">
            <thead>
                <tr>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Kuliah</th>
                    <th>Mata Kuliah</th>
                    <th>Nilai</th>
                    <th>Status</th>
                    <th>Grade</th>
                    <th>Predikat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $ns1->nim; ?></td>
                    <td><?php echo $ns1->nama; ?></td>
                    <td><?php echo $ns1->kuliah; ?></td>
                    <td><?php echo $ns1->mk; ?></td>
                    <td><?php echo $ns1->nilai; ?></td>
                    <td><?php echo $ns1->getHasil(); ?></td>
                    <td><?php echo $ns1->getGrade(); ?></td>
                    <td><?php echo $ns1->getPredikat(); ?></td>
                </tr>
            </tbody>
        </table>
    <?php } ?>
</body>
</html>
