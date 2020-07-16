<?php

// jualan produk

// jualan komik

// game



class Produk
{
    public  $judul = "judul",
        $penulis    = "penulis",
        $penerbit   = "penerbit",
        $harga      = 0;

    public function sayHello()
    {
        return "Hello World";
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk();
$produk2 = new Produk();

$produk2->judul = "Dragon Ball";
$produk2->penulis = "Akira Toriyama";
$produk2->penerbit = "Akira";
$produk2->harga = 100000;

$produk4 = new Produk();
$produk4->judul = "uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik : " . $produk2->getLabel();
echo "<br>";
echo "Game  : " . $produk4->getLabel();
