# PWEB2
### OOP (Object Oriented Programming)
*__OOP__* sendiri berisi sebuah data dan fungsi dibungkus ke dalam objek yang dibuat berdasarkan class.

<hr></hr>

### <p align= center>JOBSHEET 1</p>
#### <p align= center>Instruksi Kerja</p>
Penjelasan mengenai Instruksi Kerja pada pertemuan 1-2

<b><p>1. Membuat class </p></b>
Pada langkah pertama yaitu membuat class yang bernama Mahasiswa dengan atributnya yaitu nama, nim, dan jurusan yang bersifat public.

```php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

```

<b><p>2. Penggunaan construct </p></b>
penggunaan construct ini bertujuan untuk menginisialisasi onjek pada saat baru dibuat 
```php
// Construct
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```

<b><p>3. Penggunaan Method</b></p>
method ini digunakan untuk nantinya menampilkan, mengubah, dan mengisikan sebuah data yang sudah diinstansiasi tadi

```php
// Construct
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    
    // Fungsi tampilkanData
    public function tampilkanData(){
        echo "Saya $this->nama dengan NPM $this->nim dari jurusan $this->jurusan.<br>";
    }
    
    //  Method updateJurusan
    public function updateJurusan($newJurusan){
        $this->jurusan = $newJurusan;
    }

    //  Method setNim 
    public function setNim($newNim){ 
        $this->nim = $newNim;
    }
}
```

<b><p>4. Pembuatan Objek</b></p>
Langkah selanjutnya yaitu pembuatan objek / instansiasi dengan objeknya adalah mahasiswa1 yang dimana diinputkan value untuk Nim yaitu "230302011" dan mengubah nilai untuk jurusan yang sebelumnya "Komputer dan Bisnis" menjadi "Elektro"

```php
$mahasiswa1 = new Mahasiswa("Kristian Dimas Adi Wicaksono", "230302065", "Komputer dan Bisinis");
$mahasiswa1->tampilkanData();
$mahasiswa1->updateJurusan("Elektro");
$mahasiswa1->tampilkanData();
$mahasiswa1->setNim("230302011");
$mahasiswa1->tampilkanData();
```

#### <p align= center> Tugas 1</p>
Penjelasan mengenai tugas pada pertemuan 1-2


<b><p>1. Membuat class</b></p>
Pada langkah pertama yaitu membuat class yang bernama Dosen dengan isi atributnya yaitu nama, nip, dan matakuliah yang bersifat public
```ruby
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;

```

<p><b>2. Penggunaan construct</b></p>
Digunakan untuk menginstansiasi sebuah atribut pada class dosen

```php
// Constructor
public function __construct($nama, $nip, $mataKuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
```
<p><b>3. Penggunaan method</b></p>
method ini digunakan untuk nantinya menampilkan sebuah data yang sudah diinstansiasi tadi


```php
//  Method tampil Dosen
public function tampilkanDosen(){
        echo "Dosen : $this->nama<br> NIP : $this->nip<br> MataKuliah : $this->mataKuliah<br>";
    }
}
```
<b><p>4. Pembuatan objek</b></p>
Langkah selanjutnya yaitu pembuatan objek / instansiasi dengan objeknya adalah Dsn
```php
// Instansiasi Dosen
$Dsn = new Dosen("Kristian Dimas Adi Wicaksono", "22222222", "Bahasa");
$Dsn->tampilkanDosen();
```



### Hasil
Sehingga adapun hasil yang di dapat dalam Jobsheet 1 adalah sebagai berikut :

<img src= "/image/Hasil.png">

<hr>

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

Hasil :

<img src = "image/Jobsheet23.png">

#### 4. Polymorphism

<p align="justify">Polymorphism merupakan </p>

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
```