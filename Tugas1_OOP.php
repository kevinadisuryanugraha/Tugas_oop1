<?php

// Parent class Lemari
class Lemari {
    // Property dengan access modifier sesuai permintaan
    public $merk;
    protected $warna;
    private $kapasitas;

    // Constructor
    public function __construct($merk, $warna, $kapasitas) {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->kapasitas = $kapasitas;
        echo "Lemari {$this->merk} telah dibuat.<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Lemari {$this->merk} telah dihancurkan.<br>";
    }

    // Setter
    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function setKapasitas($kapasitas) {
        $this->kapasitas = $kapasitas;
    }

    // Getter
    public function getWarna() {
        return $this->warna;
    }

    public function getKapasitas() {
        return $this->kapasitas;
    }

    // Method
    public function getInfo() {
        return "Lemari {$this->merk}, warna {$this->warna}, isi Pakaian";
    }
}

// Child class Baju yang mengextends Lemari
class Baju extends Lemari {
    // Property tambahan khusus untuk class Baju
    private $bahan;

    // Constructor
    public function __construct($merk, $warna, $kapasitas, $bahan) {
        parent::__construct($merk, $warna, $kapasitas);
        $this->bahan = $bahan;
        echo "Lemari baju dari {$this->bahan} telah dibuat.<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Lemari baju dari {$this->bahan} telah dihancurkan.<br>";
        parent::__destruct();
    }

    // Setter
    public function setBahan($bahan) {
        $this->bahan = $bahan;
    }

    // Getter
    public function getBahan() {
        return $this->bahan;
    }

    // Method override (polymorphism)
    public function getInfo() {
        return "Lemari baju dari {$this->bahan}, merk {$this->merk}, warna {$this->getWarna()}, isi Barang Pribadi";
    }
}

// Instansiasi object dari masing-masing class
$lemari1 = new Lemari("IKEA", "putih", "10 kg");
$baju1 = new Baju("Olympus", "coklat", "5 kg", "kayu");

// Set semua property dari objectnya
$lemari1->merk = "Minimalist";
$lemari1->setWarna("hitam");
$baju1->merk = "Convers";
$baju1->setBahan("besi");

// Get semua property dari objectnya
echo "Info Lemari 1: " . $lemari1->getInfo() . "<br>";
echo "Info Baju 1: " . $baju1->getInfo() . "<br>";
