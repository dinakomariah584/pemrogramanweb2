<?php

class Orang{
    //property
    private string $nama;
    private string $tglLahir;
    protected string $alamat;

    //constructor
    public function __construct($nama)
    {
        $this->nama = $nama;
        echo "objek ".$this->nama." dibuat <br>";
        $this->tampilkanPasswod();
    }

    //destructor
    public function __destruct()
    {
        echo"objek ".$this->nama." dihapus <br>";
    }

    //method
    public function ucapkanSalam(){
        echo "<h2>Halo Perkenalkan nama saya ".$this->nama."</h2>";
    }

    private function tampilkanPasswod(){
        echo"Rahasia1234";
    }

    //setter
    public function setNama($nama){
        $this->nama =$nama;
    }

    //getter
    public function getNama(){
        return $this->nama;
    }

    public function settglLahir($tglLahir){
        $this->tglLahir =$tglLahir;
    }
    public function gettglLahir(){
        return $this->tglLahir;
    }

    public function setalamat($alamat){
        $this->alamat=$alamat;
    }
    public function getalamat(){
        return $this->alamat;
    }
}