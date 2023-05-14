<?php
    echo "<br>";
    echo "Tugas PHP OOP Pemweb A081";
    echo "========================================";
    echo "<br>";
    echo "Nama: Yafi Arya Maulana";
    echo "<br>";
    echo "NPM: 21081010135";
    echo "<br>";
    echo "========================================";
    echo "<br>";

    require_once('CDMusic.php');
    $CDMusic = new CDMusic ("Lagu Barat", 150000, 10);
    $CDMusic->setPrice(150000);
    $CDMusic->setDiscount(10);
    $CDMusic->setArtist("Coldplay");
    $CDMusic->setGenre("Musik Pop Rock");

    echo "Detail CD Music: ";
    echo "<br>";
    echo "Name : ".$CDMusic->getName();
    echo "<br>";
    echo "Harga CD : Rp.".$CDMusic->getPrice();
    echo "<br>";

    echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";

    echo "<br>";
    echo "Informasi Lengkap Terkait CD Music Anda :<br>";
    echo "Artist : ".$CDMusic->getArtist();
    echo "<br>";
    echo "Genre : ".$CDMusic->getGenre();
    echo "<br>";
    echo "Diskon yang Berlaku : ".$CDMusic->getDiscount()."%";
    echo "<br>";
    echo "Harga Setelah Mendapat Diskon : Rp.".(100 - $CDMusic->getDiscount())/100 * $CDMusic->getPrice();
    echo "<br>";

    echo "=============================================<br>";

    require_once('CDRack.php');
    $CDRack = new CDRack ("Apple Inc", 800000, 15);
    $CDRack->setPrice(800000);
    $CDRack->setDiscount(15);
    $CDRack->setCapacity("256");
    $CDRack->setModel("Solid State Drive 3,5");

    echo "Detail CD Rack : ";
    echo "<br>";
    echo "Name : ".$CDRack->getName();
    echo "<br>";
    echo "Harga : Rp.".$CDRack->getPrice();
    echo "<br>";

    echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";

    echo "<br>";
    echo "Informasi Lengkap Terkait CD Rack Anda :<br>";
    echo "Kapasitas : ".$CDRack->getCapacity()." GB";
    echo "<br>";
    echo "Model : ".$CDRack->getModel();
    echo "<br>";
    echo "Diskon Berlaku : ".$CDRack->getDiscount()."%";
    echo "<br>";
    echo "Harga Setelah Mendapat Diskon : Rp.".(100 - $CDRack->getDiscount())/100 * $CDRack->getPrice();
    echo "<br>";

    echo "==============================================<br>";
?>