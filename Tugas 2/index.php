<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas2 PHP - Faturrahman</title>
</head>
<body>
    <form action="#" method="POST">
        <table align="center" width="25%" cellpadding="10">
            <thead>
                <tr bgcolor="yellow">
                    <th colspan="2">Form Belanja</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <label for="">Nama Pelanggan :</label>
                    </td>
                    <td>
                        <input type="text" name="nama" placeholder="Masukkan Nama Pelanggan">
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="">Produk Pilihan :</label>
                    </td>
                    <td>
                    <select name="produk">
                    <option value="">--- Pilih Produk ---</option>
                    <option value="TV">TV</option>
                    <option value="KULKAS">KULKAS</option>
                    <option value="MESIN CUCI">MESIN CUCI</option>
                    <option value="AC">AC</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="">Jumlah Beli :</label>
                    </td>
                    <td>
                    <input type="text" name="jumlah" placeholder="Masukkan Jumlah Beli">
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr bgcolor="yellow">
                    <th colspan="2">
                    <input type="submit" value="kirim"> &nbsp; &nbsp;
                    <input type="reset" value="batal">
                    </th>
                </tr>
            </tfoot>
        </table>
    </form>
</body>
</html>

<?php

    $nama= $_POST['nama'];
    $produk= $_POST['produk'];
    $jumlah= $_POST['jumlah'];

    if($produk=="TV"){
        $harga = 1000000;
    }elseif($produk=="KULKAS"){
        $harga = 2000000;
    }elseif($produk=="MESIN CUCI"){
        $harga = 3000000;
    }elseif($produk=="AC"){
        $harga = 4000000;
    }else{
        $harga = 0;
    }

    $total = $jumlah*$harga;
    $diskon = $total*0.2;
    $ppn = 0.1*($total-$diskon);
    $harga_bersih = ($total-$diskon) + $ppn;
    echo "<center>";
    echo "Nama Pelanggan :" . $nama ."<br>";
    echo "Produk Pilihan :" . $produk ."<br>";
    echo "Jumlah Beli :" . $jumlah ." Produk <br>";
    echo "Harga Satuan : Rp. " . number_format($harga) ."<br>";
    echo "Total Belanja : Rp. " . number_format($total) ."<br>";
    echo "Potongan Diskon : Rp. " . number_format($diskon) ."<br>";
    echo "PPN : Rp." . number_format($ppn) ."<br>";
    echo "Harga Bersih : Rp." . number_format($harga_bersih) ."<br>";
?>