<?php

class Lemari {
    protected $merk;
    protected $warna;
    protected $kapasitas;

    public function __construct($merk, $warna, $kapasitas) {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->kapasitas = $kapasitas;
        echo "Lemari {$this->merk} telah dibuat.<br>";
    }

    public function __destruct() {
        echo "Lemari {$this->merk} telah dihancurkan.<br>";
    }

    public function setMerk($merk) {
        $this->merk = $merk;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function getWarna() {
        return $this->warna;
    }

    public function setKapasitas($kapasitas) {
        $this->kapasitas = $kapasitas;
    }

    public function getKapasitas() {
        return $this->kapasitas;
    }

    public function getInfo() {
        return "Lemari {$this->merk}, warna {$this->warna}, kapasitas {$this->kapasitas} kg.";
    }
}

class Baju extends Lemari {
    private $bahan;

    public function __construct($merk, $warna, $kapasitas, $bahan) {
        parent::__construct($merk, $warna, $kapasitas);
        $this->bahan = $bahan;
        echo "Lemari baju dari {$this->bahan} telah dibuat.<br>";
    }

    public function __destruct() {
        echo "Lemari baju dari {$this->bahan} telah dihancurkan.<br>";
        parent::__destruct();
    }

    public function setBahan($bahan) {
        $this->bahan = $bahan;
    }

    public function getBahan() {
        return $this->bahan;
    }

    public function getInfo() {
        return "Lemari baju dari {$this->bahan}, merk {$this->merk}, warna {$this->warna}, kapasitas {$this->kapasitas} kg.";
    }
}

$lemari1 = new Lemari("IKEA", "putih", 100);
$baju1 = new Baju("Olympus", "coklat", 50, "kayu");

$lemari1->setMerk("Minimalist");
$lemari1->setWarna("hitam");
$lemari1->setKapasitas(200);
$baju1->setMerk("Levi's");
$baju1->setWarna("hitam");
$baju1->setKapasitas(70);
$baju1->setBahan("besi");

echo "Info Lemari 1: " . $lemari1->getInfo() . "<br>";
echo "Info Baju 1: " . $baju1->getInfo() . "<br>";

echo $lemari1->getMerk() . "<br>";
echo $baju1->getBahan() . "<br>";
