<<<<<<< HEAD
<?php
include "controller/bukucontroller.php";

$aplikasi = new bukucontroler();

$_REQUEST = $_SERVER['REQUEST_URI'];
$_REQUEST = parse_url($_REQUEST, PHP_URL_PATH);

switch ($_REQUEST) {
    case '/': 
    case '/index.php':
        $aplikasi->jalankan();
        break;
    case '/index.php/buku/simpan':
        $aplikasi->simpan();
        break;
    case '/index.php/buku/hapus':
        $aplikasi->hapus();
        break;
    case '/index.php/edit':
        $aplikasi->edit();
        break;
    case '/index.php/buku/update':
        $aplikasi->Update();
        break;
    default:
        $aplikasi->jalankan();
=======
<?php
include "controller/bukucontroller.php";

$aplikasi = new bukucontroler();

$_REQUEST = $_SERVER['REQUEST_URI'];
$_REQUEST = parse_url($_REQUEST, PHP_URL_PATH);

switch ($_REQUEST) {
    case '/': 
    case '/index.php':
        $aplikasi->jalankan();
        break;
    case '/index.php/buku/simpan':
        $aplikasi->simpan();
        break;
    case '/index.php/buku/hapus':
        $aplikasi->hapus();
        break;
    case '/index.php/edit':
        $aplikasi->edit();
        break;
    case '/index.php/buku/update':
        $aplikasi->Update();
        break;
    default:
        $aplikasi->jalankan();
>>>>>>> 6cb82abde2966d90d22631678022427f42542b13
}