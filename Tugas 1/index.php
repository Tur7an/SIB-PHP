<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatur - Website</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
    $nama="Fatur";
    $nama_lengkap="Faturrahman Ardiansyah";
    $t_lahir="Taba Padang ";
    $tgl_lahir="14 Agustus 2003";
    $usia=20;
    $agama="Islam";
    $alamat="Kota Bengkulu";
    $univ="Universitas Muhammadiyah Bengkulu";
    $jurusan="Teknik Informatika";
    $semester=6;
    $no_wa=628123456789;
    $instagram="@fatur.kl";
    ?>
    <!-- tag div biasanya digunakan untuk membagi layout atau bagian body -->
    <div class="header">
        <h1> <span style="background-color: white;">Hi, I'am <?= $nama ?></span></h1>
        <p> <span style="background-color: white;">Student</span></p>
    </div>
    <div class="navbar">
        <a href="index.html">Home</a>
        <a href="#">My Study</a>
        <a href="#">Galery</a>
    </div>
    <div class="row">
        <div class="column side">
            <fieldset>
                <legend>Contact</legend>
                <ul>
                    <li><a href="#" target="_blank" class="list">WhatsApp: <?= $no_wa ?> </a></li>
                    <li><a href="" target="_blank" class="list">Instagram: <?= $instagram ?></a></li>
                </ul>
            </fieldset>
        </div>
        <div class="column middle">
            <h2>Biodata Saya</h2>
            <p align="justify">
                <img src="./img/profil.png"
                alt="" width="39%" align="left" hspace="10">
               "Perkenalkan saya <b><?= $nama_lengkap ?></b>, Saya adalah mahasiswa Teknik Informatika yang penuh antusiasme dalam menjelajahi dunia pemrograman dan pengembangan perangkat lunak. Saya percaya bahwa teknologi adalah kunci untuk menciptakan perubahan positif, dan saya bersemangat untuk menjadi bagian dari perjalanan itu."
            </p>
            <div class="biodata">
            <fieldset>
                <legend>Biodata</legend>
            <p>
                <?php
                echo "<b>Nama: </b> $nama_lengkap<br>";
                echo "<b>Tempat Tanggal Lahir: </b> $t_lahir, $tgl_lahir<br>";
                echo "<b>Usia : </b>20 Tahun <br>";
                echo "<b>Agama : </b>Islam <br>";
                echo "<b>Alamat : </b>Kota Bengkulu";
                ?>
            </p>
            </fieldset>
            <fieldset>
            <legend> Pendidikan Saat ini</legend>
                <p>
                    <?php
                        echo "<b>$univ</b> <br>";
                        echo "$jurusan Semester $semester";
                    ?>
                </p>
            </fieldset>
        </div>
        </div>
        <div class="column side">
        <fieldset>
            <legend>Materi Fullstack Web Developer</legend>
            <ul>
                <li><a href="https://mousmedia.com/pengertian-web-design-serta-tujuan-dan-fungsinya/" target="_blank" class="list">Desain Web</a></li>
                <li><a href="https://www.niagahoster.co.id/blog/mysql-adalah/" target="_blank" class="list">Database</a></li>
                <li><a href="https://www.biznetgio.com/news/apa-itu-php" target="_blank" class="list">Pemrograman PHP</a></li>
                <li><a href="https://www.dewaweb.com/blog/mengenal-javascript/" target="_blank" class="list">Pemrograman JavaSript</a></li>
                <li><a href="https://www.biznetgio.com/news/apa-itu-laravel" target="_blank" class="list">Pemrograman Laravel</a></li>
            </ul>
        </fieldset>
        </div>
        <!-- <div class="footer">
            <p>Footer</p>
        </div> -->
        </div>
</body>
</html>