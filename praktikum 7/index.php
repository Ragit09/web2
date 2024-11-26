<<<<<<< HEAD
<?php

include "Controller/BukuController.php";

$aplikasi = new BukuController();
$REQUEST = $_SERVER ['REQUEST_URI'];
$REQUEST = parse_url($REQUEST, PHP_URL_PATH);

switch($REQUEST){
    case '/';
    case '/index.php';
        $aplikasi->Jalankan();
    break;
    case '/index.php/buku/simpan';
        $aplikasi->simpan();
    break;
    case 'index.php/buku/hapus';
        $aplikasi->hapus();
    break;

=======
<?php

include "Controller/BukuController.php";

$aplikasi = new BukuController();
$REQUEST = $_SERVER ['REQUEST_URI'];
$REQUEST = parse_url($REQUEST, PHP_URL_PATH);

switch($REQUEST){
    case '/';
    case '/index.php';
        $aplikasi->Jalankan();
    break;
    case '/index.php/buku/simpan';
        $aplikasi->simpan();
    break;
    case 'index.php/buku/hapus';
        $aplikasi->hapus();
    break;

>>>>>>> 6cb82abde2966d90d22631678022427f42542b13
}