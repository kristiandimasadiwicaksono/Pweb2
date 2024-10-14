<?php
// Definisi sebuah class
class Mahasiswa {
    // Atribut
    private $nama;
    private $nim;
    private $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Method untuk menampilkan data keseluruhan mahasiswa
    public function tampilkanData(){
        echo "Nama : $this->nama <br> NIM : $this->nim <br> Jurusan : $this->jurusan <br>";
    }
    // Method untuk meletakkan value nama 
    public function setNama($nama){
        $this->nama = $nama;
    }
    // Method untuk meletakkan value NIM
    public function setNim($nim){
        $this->nim = $nim;
    }
    // Method untuk meletakkan value Jurusan
    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
    // Method untuk menampilkan data Nama mahasiswa
    public function getNama(){
        echo "Nama : $this->nama<br>";
    }
    // Method untuk menampilkan data NIM mahasiswa
    public function getNim(){
        echo "NIM : $this->nim<br>";
    }
    // Method untuk menampilkan data Jurusan mahasiswa
    public function getJurusan(){
        echo "Jurusan : $this->jurusan<br>";
    }
}

// Proses instansiasi object
$Mhs = new Mahasiswa (nama : "Asep", nim : "230303030", jurusan : "Mesin");
$Mhs->tampilkanData();
// Memberikan value Udin untuk atribut nama
$Mhs->setNama("Udin");
$Mhs->getNama();
// Memberikan value 233333333 untuk atribut NIM
$Mhs->setNim("233333333");
$Mhs->getNim();
 // Memberikan value Komputer dan Bisnis untuk atribut Jurusan
$Mhs->setJurusan("Komputer dan Bisnis");
$Mhs->getJurusan();
?>