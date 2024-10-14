<?php
// Definisi sebuah class
class Pengguna {
    // Atribut
    private $nama;
    
    // Constructor
    public function __construct($nama){
        $this->nama = $nama;
    }

    // Method untuk menampilkan nama pengguna
    public function getNama(){
        echo "Nama : $this->nama<br>";
    }
    // Method untuk menampilkan akses fitur pengguna
    public function aksesFitur(){
        echo "Pengguna dapat mengakses fitur untuk pengguna";
    }
}

// Definisi sebuah class
class Mahasiswa extends pengguna {
    // Atribut
    private $nim;
    private $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan){
        parent::__construct($nama);
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Method untuk menampilkan data keseluruhan mahasiswa
    public function tampilkanData(){
        parent::getNama();
        echo "NIM : $this->nim <br> Jurusan : $this->jurusan <br>";
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
    // Method untuk menampilkan akses fitur pada mahasiswa
    public function aksesFitur(){
        echo "Mahasiswa dapat mengakses fitur untuk mahasiswa<br>";
    }
}


// Definisi sebuah class yang merupakan warisan dari pengguna
class Dosen extends Pengguna{
    private $mataKuliah;

    // Constructor
    public function __construct($nama, $mataKuliah){
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    // method untuk menampilkan mata kuliah
    public function getMataKuliah(){
        echo "Matkul : $this->mataKuliah<br>";
    }

    // Method untuk menampilkan akses fitur pada mahasiswa
    public function aksesFitur(){
        echo "Dosen dapat mengakses fitur untuk dosen<br>";
    }
}

// Instansiasi objek
$Dsn = new Dosen("Adudu", "Matdis");
$Mhs = new Mahasiswa("Adudu","233333333","Mesin");
// Memanggil method akses fitur pada class Mahasiswa
$Mhs->aksesFitur();
// Memanggil method tampilkan data pada class Mahasiswa
$Mhs->tampilkanData();
// Memanggil method akses fitur pada class Dosen
$Dsn->aksesFitur();
// Memanggil method Mata Kuliah pada class Dosen
$Dsn->getMataKuliah();
?>