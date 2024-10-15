<?php
abstract class connection {
    protected $servername;
    protected $username;
    protected $password;
    protected $dbname;
    protected $db;

    public function __construct($servername, $username, $pasword, $dbname) {
    $this->servername = "localhost";
    $this->username = "root";
    $this->password = "";
    $this->dbname = "permohoann_izin";

    $this->db = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

        if($this->db){
            die("Koneksi gagal: " . mysqli_connect_error());
        }
    }
    abstract public function getAllData();
}
?>