<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .wrapper{
            padding: 18px;
        }
        .form-input{
            display: block;
            border-radius: 4px;
        }
        </style>
    <title>form dengan OOP</title>
</head>
<body>
    <?php
        require_once "formmahasiswa.php";

        $form = New form();
        $form->settextfield('nama','');
        $form->settextfield('nim','');
        $form->settextfield('prodi','');
        $form->settextfield('fakultas','');
        $form->tampilkanform();
    ?>
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .wrapper{
            padding: 18px;
        }
        .form-input{
            display: block;
            border-radius: 4px;
        }
        </style>
    <title>form dengan OOP</title>
</head>
<body>
    <?php
        require_once "formmahasiswa.php";

        $form = New form();
        $form->settextfield('nama','');
        $form->settextfield('nim','');
        $form->settextfield('prodi','');
        $form->settextfield('fakultas','');
        $form->tampilkanform();
    ?>
</body>
>>>>>>> 6cb82abde2966d90d22631678022427f42542b13
</html>