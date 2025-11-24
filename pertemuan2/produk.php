<?php
class Produk{
    // Membuat Properti
    public $judul = "judul", 
            $penulis = "penulis", 
            $penerbit = "penerbit", 
            $harga = 0;

    // Membuat Method
    public function sayHellow(){
        return "Hello Dunia";
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// // Mengubah Isi dari properti
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "JJK";
// // Menambahkan Properti Baru
// $produk2->tambahProperty = "New Property";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kisimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sonny Computer";
$produk4->harga = 250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();


// Memanggil Methot
// echo $produk3->sayHellow();

// echo "<br>";

// echo $produk3->getLabel();

?>