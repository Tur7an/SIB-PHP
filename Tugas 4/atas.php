<?php
include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Fatur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
        <h1 align="center">WEB FATUR</h1>

        <div class="navbar">
            <!-- Home | Produk | Pesan | Galeri | Gesbuk -->
            <?php
                //looping foreach dari web menu.php
                foreach ($menu_atas as $key => $value) {
                    // echo "$key $value <br>";
                    echo "<a href='index.php?hal=$key' class='navbar-link'>$value</a> | ";
                }
            ?>
        </div>