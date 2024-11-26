<<<<<<< HEAD
<?php

class Database{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $DBname = 'perpustakaan';
    private $koneksi;

    public function __construct()
    {
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->DBname);
    }

    public function __destruct()
    {
        $this->koneksi->close();
    }

    public function getKoneksi(){
        return $this->koneksi;
    }
=======
<?php

class Database{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $DBname = 'perpustakaan';
    private $koneksi;

    public function __construct()
    {
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->DBname);
    }

    public function __destruct()
    {
        $this->koneksi->close();
    }

    public function getKoneksi(){
        return $this->koneksi;
    }
>>>>>>> 6cb82abde2966d90d22631678022427f42542b13
}