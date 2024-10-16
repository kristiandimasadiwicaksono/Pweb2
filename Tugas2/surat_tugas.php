<?php
include 'koneksi.php';

class surat_tugas extends connection{
    private $surat_tugas_id;
    private $nomor;
    private $nama_dsn;
    private $tgl_surat_tugas;
    private $tujuan;
    private $transportasi;
    private $keperluan;

    public function __construct($surat_tugas_id, $nomor, $nama_dsn, $tgl_surat_tugas, $tujuan, $transportasi, $keperluan){
        $this->surat_tugas_id = $surat_tugas_id;
        $this->nomor = $nomor;
        $this->nama_dsn = $nama_dsn;
        $this->tgl_surat_tugas = $tgl_surat_tugas;
        $this->tujuan = $tujuan;
        $this->transportasi = $transportasi;
        $this->keperluan = $keperluan;
    }

    public function getAllData(){
        echo "";
    }
}
?>