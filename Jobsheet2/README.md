# PWEB2

### <p align="center">JOBSHEET 2</p>

#### 1. Membuat Class dan Object
<p align = "justify">Langkah pertama yaitu menentukan class dan objectnya, pada hal ini sudah ditetapkan bahwa akan membuat sebuah Class yang bernama Mahasiswa dengan atributnya yaitu nama, nim, dan jurusan.


Setelah itu membuat sebuah method untuk menampilkan sebuah data yang sudah diinstansiasikan.</p>

```php
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
```
Hasil :

<img src = '/image/Jobsheet21.png'>

#### 2. Encapsulation
<p align = "justify">Langkah ke-2 yaitu encapsulation dimana menyatukan atribut dan method yang biasa disebut dengan object. Encapsulation digunakan untuk membatasi akses terhadap atribut dan method, sehingga data yang diubah hanya data yang dipanggil melalui sebuah method tersebut. pada langkah ke-2 ini diterapkan dengan menggunakan method setter dan getter, contohnya setNama dan getNama dimana set untuk memberikan nilai kepada sebuah atribut dan get untuk mendapatkan data tersebut.</p>

```php
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
```

Hasil : 

<img src = '/image/Jobsheet22.png'>

#### 3. Inheritance

<p align = "Justify">Inheritance yaitu pewarisan yang dimana terdapat sebuah class baru yang mewarisi class induk (superclass). Dengan adanya inheritance ini, kode program yang sama tidak perlu ditulis kembali ke dalam class lainnya seperti pada program dibawah ini, terdapat superclass pengguna dengan atribut nama dan terdapat subclass dosen dengan atribut mataKuliah. Selanjutnya melakukan proses instansiasi object dengan value untuk nama = "Adudu" dan value untuk MataKuliah = "Matdis".</p>

```php
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
}

// Memberikan value untuk nama dan matakuliah
$Dsn = new Dosen("Adudu", "Matdis");
// Menampilkan data pada class dosen
$Dsn->getMataKuliah();
?>
```

