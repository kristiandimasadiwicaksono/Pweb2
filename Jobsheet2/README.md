# PWEB2

### <p align="center">JOBSHEET 2</p>

#### 1. Membuat Class dan Object
Langkah pertama yaitu menentukan class dan objectnya, pada hal ini sudah ditetapkan bahwa akan membuat sebuah Class yang bernama Mahasiswa dengan atributnya yaitu nama, nim, dan jurusan.


Setelah itu membuat sebuah method untuk menampilkan sebuah data yang sudah diinstansiasikan.
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

<img src = "image/JS21.jpg">