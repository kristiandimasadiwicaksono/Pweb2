<?php
// Kelas abstract Person
abstract Class Person2{
    // Attribute protected
    protected $name;

    // Constructor inisialisasi attribute
    public function __construct($name){
        $this->name = $name;
    }

    // setter mengubah nilai name
    public function setName($name){
        $this->name = $name;
    }

    // getter untuk mendapatkan
    public function getName(){
        echo "Nama : $this->name<br>";
    }

    // getter untuk Role
    abstract public function getRole();
}

// class extends dari class person2
class Mahasiswa extends Person2{
    // Attribute private
    private $nim;
    private $jurusan;

    // Constructor inisialisasi attribute
    public function __construct ($name, $nim, $jurusan){
        parent::__construct($name);
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // setter untuk mengubah nilai Nim
    public function setNim($nim){
        $this->nim = $nim;
    }

    // setter untuk mengubah nilai Jurusan
    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }

    // getter untuk mendapatkan nilai name, nim, dan jurusan
    public function getData(){
        parent::getName();
        echo "NIM : $this->nim <br> Jurusan : $this->jurusan <br>";
    }
    
    // getter untuk mendapatkan role
    public function getRole(){
        echo "Mahasiswa<br>";
    }
}

// class extends dari person2
class Dosen extends Person2{
    // Attribute Private
    private $Nidn;
    private $Matakuliah;

    // constructor untuk menginisialisasi attribute
    public function __construct($name, $Nidn, $Matakuliah){
        parent::__construct($name);
        $this->Nidn = $Nidn;
        $this->Matakuliah = $Matakuliah;
    }

    // setter untuk mengubah nilai Nidn
    public function setNidn($nidn){
        $this->Nidn = $nidn;
    }

    // setter untuk mengubah nilai matakuliah
    public function setMatakuliah($Matakuliah){
        $this->Matakuliah = $Matakuliah;
    }

    // getter untuk mendapatkan nilai name, nidn, dan matakuliah
    public function getData(){
        parent::getName();
        echo "NIDN : $this->Nidn <br> Matakuliah : $this->Matakuliah<br>";
    }

    // getter untuk mendapatkan role
    public function getrole(){
        echo "Dosen<br>";
    }
}

// Kelas abstract jurnal
abstract class jurnal{
    // method untuk jurnal
    abstract public function jurnal();
}

// class extends dari class jurnal
class JurnalMahasiswa extends jurnal{
    // method jurnal
    public function jurnal(){
    echo "Kelola pengajuan jurnal Mahasiswa<br><br>";
    }
}

// class extends dari class jurnal
class JurnalDosen extends jurnal{

    // method jurnal
    public function jurnal(){
    echo "Kelola pengajuan jurnal Dosen";
    }
}

// Instansiasi objek
$Mahasiswa = new Mahasiswa("Kristian Dimas","230302065","Komputer dan Bisnis");
// Memanggil method getRole
$Mahasiswa->getRole();
// Memanggil method getData
$Mahasiswa->getData();
// Instanisasi jurnal
$JurnalMhs = new JurnalMahasiswa();
// Memanggil method jurnal
$JurnalMhs->jurnal();
// Instanisasi objek
$Dosen = new Dosen("Ucup","233333333","Mesin");
// Memanggil method getrole
$Dosen->getRole();
// Memanggil method getData
$Dosen->getData();
// Instansiasi objek
$JurnalDsn = new JurnalDosen();
// Memanggil method jurnal
$JurnalDsn->jurnal();
?>