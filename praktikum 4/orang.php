<?php

class orang{
    protected $nama;

    public function setnama ($nama){
        $this->nama = $nama;
    }

    public function ucapsalam(){
        echo "halo perkemalkan nama saya ".$this->nama ."<br>";
    }
}