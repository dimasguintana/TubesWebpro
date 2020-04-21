<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet">
    <link rel="icon" href="assets/bitmap.png">
    <title><?= $title ?></title>

    <script src="http://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.js"></script>
</head>
<body>
  <?php $this->load->view($main_view); ?>

  <!-- Modal Tambah Pasien -->
<div class="modal fade" id="tambahPasien" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>TAMBAH DATA PASIEN</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" id="formTambah">
        <div class="form-group">
          <label for="formGroupExampleInput">Username</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="UsernamePasien" name="usernameP" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Password</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="PasswordPasien" name="passwordP"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Nama</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="NamaPasien" name="namaP" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Alamat</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="AlamatPasien" name="alamatP" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Usia</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="UsiaPasien" name="usiaP" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Jenis Kelamin</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="JKPasien" name="jkP" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" id="tambahSubmit">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>



<!-- Modal Delete-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete Pasien</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin ingin menghapus user ini?<span id="dataUser"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="deleteButton">Delete</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>