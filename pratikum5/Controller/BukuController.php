<?php

require_once "Model/DaftarBukuModel.php";

class BukuController{
    public function jalankan(){

        //menggunakan model
        $dataModel = new DaftarBukuModel();

        //mengirim dataModel ke BukuView dan Menampilkannya
        include "View/BukuView.php";
    }
}