<?php
// Kelas abstract Person
abstract class Person{
    // Attribute protected
    protected $name;

    // Constructor
    public function __construct($name){
        $this->name = $name;
    }

    // Method setter untuk atribute name
    public function setName($name){
        $this->name = $name;    
    }

    // Method abstract getter 
    abstract public function getName();
}

// Kelas students extends person
class Student extends Person{
    private $studentID;

    // constructor untuk menginisialisasi nama dan student id
    public function __construct($name, $studentID){
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // setter untuk mengubah nilai student
    public function setStudentID($studentID){
        $this->studentID = $studentID;
    }

    // getter untuk mendapatkan student id
    public function getStudentID(){
        echo "ID : $this->studentID";
    }

    // getter untuk mendapatkan nama
    public function getName(){
        echo "Nama Pelajar : $this->name<br>";
    }
}

// Kelas teacher extends person
class Teacher extends Person{
    public $TeacherID;

    // Constructor untuk menginisialisasi nama dan teacher id
    public function __construct($name, $TeacherID){
        parent::__construct($name);
        $this->TeacherID = $TeacherID;
    }

    // getter untuk mendapatkan nama
    public function getName(){
        echo "Nama Murid : $this->name<br>";
    }
}

// Kelas abstract course
abstract class Course{

    // abstract method untuk course details
    abstract public function getCourseDetails();
}

// Kelas extends(turunan) Course
class OnlineCourse extends Course{

    // Method mencetak detail course
    public function getCourseDetails(){
        echo "Online Course<br>";
    }
}

class OfflineCourse extends Course{
    // Method mencetak detail course
    public function getCourseDetails(){
        echo "Offline Course<br>";
    }
}

// Instansiasi objek
$murid = new Student("Dimas", "12");
$guru = new Teacher("Josh", "16");

// Memanggil method getname dari class student
$murid->getName();
// Memanggil method getname dari class teacher
$guru->getName();
// Mengubah nama murid di class student
$murid->setName("Nale");
// Memanggil method getname untuk menampilkan nama baru
$murid->getName();

// instansiasi objek
$Online = new OnlineCourse();
// Memanggil method untuk menampilkan detail course
$Online->getCourseDetails();
// instansiasi objek
$Offline = new OfflineCourse();
// Memanggil method untuk menampilkan detail course
$Offline->getCourseDetails();
?>