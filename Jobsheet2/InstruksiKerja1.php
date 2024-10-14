<?php
// Definisi sebuah class
class Mahasiswa {
    // Atribut
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Method untuk menampilkan data mahasiswa
    public function tampilkanData(){
        echo "Nama : $this->nama <br> NIM : $this->nim <br> Jurusan : $this->jurusan";
    }
}

// Proses instansiasi object
$Mhs = new Mahasiswa (nama : "Asep", nim : "230303030", jurusan : "Mesin");
$Mhs->tampilkanData();
?>