<?php
class Mahasiswa extends pengguna {
    private $nama;
    private $nim;
    private $jurusan;

    public function __construct ($nama, $nim, $jurusan,) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData(){
        echo "Nama : $this->nama<br> NIM : $this->nim<br> Jurusan : $this->jurusan";
    }

    public function setNama($newNama){
        $this->nama = $newNama;
    }

    public function setNim($newNim){
        $this->nim = $newNim;
    }
    
    public function setJurusan($newJurusan){
        $this->jurusan = $newJurusan;
    }

    public function getNama(){
        echo "$this->nama<br>";
    }

    public function getNim(){
        echo "$this->nim<br>";
    }

    public function getJurusan(){
        echo "$this->jurusan <br>";
    }
    public function aksesFitur(){
        echo "Akses fitur mahasiswa";
    }
}

$mhs = new Mahasiswa (nama : "Asep", nim : "230302030", jurusan : "JKB");
$mhs->tampilkanData();
$mhs->setNama("Udin");
$mhs->tampilkanData();
$mhs->aksesFitur();


class Pengguna {
    private $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }
    
    public function getNama(){
        echo "Nama : $this->nama<br>";
    }

    public function aksesFitur(){
        echo "Ini adalah akses fitur";
    }
}

$Pengguna1 = new Pengguna (nama : "Adudu");
$Pengguna1->getNama();
$Pengguna1->aksesFitur();


class Dosen extends pengguna {
    private $mataKuliah;

    public function __construct($nama, $mataKuliah){
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    public function getMatakuliah(){
        echo "Matakuliah : $this->mataKuliah<br>";
    }

    public function aksesFitur(){
        echo "Akses fitur dosen";
    }
}

$matkul = new Dosen (mataKuliah :  "Alpro", nama : "Aadudu");
$matkul->getMatakuliah();
$matkul->aksesFitur();
?>