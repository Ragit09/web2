<?php

require_once "model/daftarbuku.php";

class bukucontroller{

    public function jalankan(){
        //mengakses model
        $data = new daftarbuku();

        //memberi data model ke view dan menampilkan view
        include "view/bukuview.php";
    }
}