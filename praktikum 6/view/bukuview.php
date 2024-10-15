<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>daftar buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">
    <h1>Daftar buku</h1>
  <div class="my-3">
    <button class="btn btn-primary" data-bs-toggle="modal"
  data-bs-target="#tambahmodal"><i class="bi-plus-circle-fill"></i> tambah</button>
  </div>
    <div class="row">
      <div class="col-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <?php foreach($data->getkolomtabel()as $kolom): ?>

                        <th scope="col">
                            <?php echo $kolom?>
                        </th>
                    <?php endforeach;?>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
              <?php $no = 0;?>
                <?php foreach($data->getdata() as $buku): ?>

                    <tr>
                        <td><?php echo ++$no; ?></td>
                        <td><?php echo $buku->getjudul(); ?></td>
                        <td><?php echo $buku->getpengarang(); ?></td>
                        <td><?php echo $buku->getpenerbit(); ?></td>
                        <td><?php echo $buku->gettahun(); ?></td>
                        <td>
                          <a href="/index.php/edit?id=<?php echo
                          $buku->getid();?>" class="btn 
                          btn-success"><i class="bi-pencil-square"></i> edit</a>

                          <button class = "btn btn-danger"
                          data-bs-toggle="modal" 
                          data-bs-target="#hapusmodal" data-bs-id="<?php
                          echo $buku->getid();?>"><i class="bi-trash"></i> hapus</button>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
      </div>
    </div>
  </div>
  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>