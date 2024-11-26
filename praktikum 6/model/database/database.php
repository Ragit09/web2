<<<<<<< HEAD
<?php

class databse{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $databasename = 'perpustakaan';
    private $koneksi;

    public function __construct()
    {
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->databasename);

    }

    public function __destruct()
    {
        $this->koneksi->close();
    }

    public function getkoneksi(){
        return $this->koneksi;
    }
=======
<?php

class databse{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $databasename = 'perpustakaan';
    private $koneksi;

    public function __construct()
    {
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->databasename);

    }

    public function __destruct()
    {
        $this->koneksi->close();
    }

    public function getkoneksi(){
        return $this->koneksi;
    }
>>>>>>> 6cb82abde2966d90d22631678022427f42542b13
}