<?php

require_once "buku.php";
require_once "database/database.php";

class daftarbuku{

    public function getdata(){
      $bd = new databse();
      $koneksi = $bd->getkoneksi();

      $daftar_buku = [];

      $sql = "select * from buku";
      $query = $koneksi->query($sql);

      if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $buku = new buku($row['judul'], $row['pengarang'], $row['penerbit'], $row['tahun']);
            array_push($daftar_buku, $buku);
        }
      }

      return $daftar_buku;

    }

    public function getkolomtabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }
}