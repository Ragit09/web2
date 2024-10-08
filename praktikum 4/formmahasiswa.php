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
