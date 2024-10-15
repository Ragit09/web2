<?php

require_once "orang.php";
require_once "nilai.php";

class mahasiswa extends  orang{
    protected $nim;
    protected nilai $nilai;

    public function setNim($nim){
        $this->nim = $nim;
    }

    public function setNilai($nilai){
        $this->nim = $nilai;
    }

    public function getNim(){
        return $this -> nim;
    }

    public function getNilai(){
        return $this -> nilai;
    }

    public function tampilkandata(){
        echo "nama : " . $this->nama . "<br>";
        echo "NIM : " . $this->nim . "<br>";
        echo "nilai tugas : " . $this->nilai->getTugas() . "<br>";
        echo "nilai UTS : " . $this->nilai->getUTS() . "<br>";
        echo "nilai UAS : " . $this->nilai->getUAS() . "<br>";




    }


}