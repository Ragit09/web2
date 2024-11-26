<<<<<<< HEAD
<?php

require_once "model/daftarbuku.php";

class bukucontroller{

    public function jalankan(){
        //mengakses model
        $data = new daftarbuku();

        //memberi data model ke view dan menampilkan view
        include "view/bukuview.php";
    }
=======
<?php

require_once "model/daftarbuku.php";

class bukucontroller{

    public function jalankan(){
        //mengakses model
        $data = new daftarbuku();

        //memberi data model ke view dan menampilkan view
        include "view/bukuview.php";
    }
>>>>>>> 6cb82abde2966d90d22631678022427f42542b13
}