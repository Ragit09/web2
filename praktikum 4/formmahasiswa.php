<<<<<<< HEAD
<?php

class form{
    protected $fields;

    public function __construct()
    {
        $this->fields =[];
    }

    public function settextfield($nama, $text,){
        $tabel = "<div class='wrapper'><tabel for'".$nama."'>".$nama."</tabel>";
        $textfield = "<input class='form-input' Type='text' nama='". $nama."' ></div>";
        array_push($this->fields, $tabel, $textfield);

    }

    public function tampilkanform(){
        echo "<form >";
          foreach($this->fields as $fields){
            echo $fields;
          }
        echo "<input type='submit' value='simpan'";
        echo "</forms";
    }
}

    class formmahasiswa{

    }
=======
<?php

class form{
    protected $fields;

    public function __construct()
    {
        $this->fields =[];
    }

    public function settextfield($nama, $text,){
        $tabel = "<div class='wrapper'><tabel for'".$nama."'>".$nama."</tabel>";
        $textfield = "<input class='form-input' Type='text' nama='". $nama."' ></div>";
        array_push($this->fields, $tabel, $textfield);

    }

    public function tampilkanform(){
        echo "<form >";
          foreach($this->fields as $fields){
            echo $fields;
          }
        echo "<input type='submit' value='simpan'";
        echo "</forms";
    }
}

    class formmahasiswa{

    }
>>>>>>> 6cb82abde2966d90d22631678022427f42542b13
