<?php

require_once "buku.php";

class daftarbuku{

    public function getdata(){
        $daftar_buku = array(
          new buku('Belajar pemrograman web','Emely w.', 'Informatika', '2024'),
          new buku('Matematika distkrit','Rinaldi munir', 'Andi Publisher', '2020'),
          new buku('Kalkulus','Robert T.', 'Erlangga', '2019'),
          new buku('Metodologi Penelitian','James w.', 'Pustaka UIN', '2024'),
        );

        return $daftar_buku;
    }

    public function getkolomtabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }
}