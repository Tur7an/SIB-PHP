<?php
$a1 = ['Nama Mahasiswa'=> 'Faturrahman Ardiansyah', 'NIM'=>202401, 'Nilai'=>90];
$a2 = ['Nama Mahasiswa'=> 'Meylan Prana Wulandari', 'NIM'=>202402, 'Nilai'=>90];
$a3 = ['Nama Mahasiswa'=> 'Devano Cesario', 'NIM'=>202403, 'Nilai'=>60];
$a4 = ['Nama Mahasiswa'=> 'Wahyu Ramadani', 'NIM'=>202404, 'Nilai'=>40];
$a5 = ['Nama Mahasiswa'=> 'Bagas Kurniawan', 'NIM'=>202402, 'Nilai'=>85];
$a6 = ['Nama Mahasiswa'=> 'Martiyas Tirtayo', 'NIM'=>202406, 'Nilai'=>30];
$a7 = ['Nama Mahasiswa'=> 'Dimas Setiawam', 'NIM'=>202407, 'Nilai'=>80];
$a8 = ['Nama Mahasiswa'=> 'Ade Saputra', 'NIM'=>202408, 'Nilai'=>85];
$a9 = ['Nama Mahasiswa'=> 'Arjuna Aditya Ladi', 'NIM'=>202409, 'Nilai'=>75];
$a10 = ['Nama Mahasiswa'=> 'M. Afil Alqazaly', 'NIM'=>2024010, 'Nilai'=>90];

$ar_nilai = [$a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10];

    $ar_judul = ['No', 'Nama Mahasiswa', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];


    $jumlah = array_column($ar_nilai,'Nilai');
    $total_nilai = array_sum($jumlah);
    $nilai_tertinggi = max($jumlah);
    $nilai_terendah = min($jumlah);
    $jumlah_mahasiswa = count($ar_nilai);
    $nilai_rata2 = $total_nilai / $jumlah_mahasiswa;


    $keterangan = ['
    Nilai Tertinggi'=>$nilai_tertinggi,
    'Nilai Terendah' =>$nilai_terendah,
    'Nilai Rata-Rata'=>$nilai_rata2,
    'Jumlah Mahasiswa'=>$jumlah_mahasiswa,
    'Jumlah Keseluruhan Nilai'=>$total_nilai
];

?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<head>
    <title>Daftar Nilai Mahasiswa</title>
</head>
<body>
    <h3>Daftar Nilai Mahasiswa</h3>
    <table>
        <thead>
            <tr>
            <?php foreach($ar_judul as $judul){?>
            <th><?= $judul ?></th>
            <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach ($ar_nilai as $nilai){

                $bruto = $nilai['harga']*$nilai['jumlah'];

                $diskon = ($nilai['nilai'] == 'Durian' && $nilai['jumlah'] >=5) ? 0.2 : 0.1;
                $harga_diskon = $diskon * $bruto;
                $harga_bayar = $bruto - $harga_diskon;
                $ket=($nilai['Nilai'] >= 65) ? 'Lulus' : 'Gagal';

                if($nilai['Nilai'] >=85 && $nilai['Nilai'] <=100) $grade='A';
                elseif($nilai['Nilai'] >=75 && $nilai['Nilai'] <=85) $grade='B';
                elseif($nilai['Nilai'] >=60 && $nilai['Nilai'] <=75) $grade='C';
                elseif($nilai['Nilai'] >=35 && $nilai['Nilai'] <=60) $grade='D';
                elseif($nilai['Nilai'] >=0 && $nilai['Nilai'] <=35) $grade='E';
                else $grade='Nilai Belum Diinput';

                switch($grade){
                    case 'A' :
                        $predikat='Sangat Memuaskan';
                        break;
                    case 'B' :
                        $predikat='Memuaskan';
                        break;
                    case 'C' :
                        $predikat='Cukup';
                        break;
                    case 'D' :
                        $predikat='Kurang';
                        break;
                    case 'E' :
                        $predikat='Sangat Kurang';
                        break;
                    default:
                        $predikat='Nilai Belum Diinput';
                }
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $nilai['Nama Mahasiswa'] ?></td>
                <td><?= $nilai['NIM'] ?></td>
                <td><?= $nilai['Nilai'] ?></td>
                <td style="color: <?= ($ket == 'Lulus') ? 'green' : 'red' ?>"><?= $ket ?></td>
                <td><?= $grade?></td>
                <td><?= $predikat?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <?php
            foreach($keterangan as $ket => $hasil){?>
            <tr>
                <th colspan="3"><?= $ket ?></th>
                <th colspan="4"><?= $hasil ?></th>
            </tr>
            
            <?php } ?>
        </tfoot>
    </table>
    <footer> <center>&copy; <?= date('Y') ?> Fatur Rahman | Group 1</footer>
</body>
</html>