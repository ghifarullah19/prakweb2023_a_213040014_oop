<?php

// Namespace (Encapsulation)
/*
- Sebuah cara untuk mengelompokkan program ke dalam sebuah package tersendiri.
- PHP tidak mengizinkan kita untuk memiliki 2 Class dengan nama yang sama.
- Tidak masalah jika kita bekerja sendiri.
- Bagaimana jika tim?
- Bagaimana jika kita menggunakan script / library dari pihak ke tiga?
- namespace Vendor/Namespace/SubNamespace
*/

require_once 'App/init.php';

// Instansiasi
// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUSer;

new ServiceUser();
echo "<br>";
new ProdukUser();

?>