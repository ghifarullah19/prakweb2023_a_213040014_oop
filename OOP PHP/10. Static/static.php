<?php

// Static
/* 
- Kita bisa mengakses property dan method dalam konteks class.
- Jadi kita bisa akses dua hal tersebut tanpa instansiasi.
- Member terikat dengan class, bukan dengan object.
- Nilai static akan selalu tetap, meskipun object di instansiasi berulang kali.
- Membuat kode menjadi 'procedural'.
- Biasanya digunakan untuk membuat fungsi helper.
- Atau digunakan di class-class utility pada framework.
*/

// class ContohStatic {
//     public static $angka = 1;

//     public static function halo() {
//         return "Halo " . self::$angka++ . " kali.";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class Contoh {
    public static $angka = 1;
    
    public function halo() {
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();


?>