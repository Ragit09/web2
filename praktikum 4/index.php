<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praktikum 4</title>
</head>
<body>
    <h1>Konsep pewarisan</h1>
    <div class="">
        <?php
        require_once "orangbiasa.php";
        require_once "oranginggris.php";
        require_once "mahasiswa.php";

        $james = new orangbiasa();
        $james->setnama('james smith');
        $james->ucapsalam();

        echo "<br>";

        $rano = new oranginggris();
        $rano->setnama('rano karno');
        $rano->ucapsalam();

        echo "<br>";

        $mahasiswa = new mahasiswa();
        $mahasiswa->setNama('emely walker');
        $mahasiswa->setNim(701230090);

        echo "<br>";

        $nilaimahasiswa = new nilai();
        $nilaimahasiswa->settugas(70);
        $nilaimahasiswa->setuts(67);
        $nilaimahasiswa->setuas(90);

        $mahasiswa->setnilai($nilaimahasiswa);

        $mahasiswa->ucapsalam();
        $mahasiswa->tampilkandata();


        ?>


    </div>
</body>
</html>