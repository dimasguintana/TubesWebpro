<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.10/dist/sweetalert2.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.10/dist/sweetalert2.all.min.js" ></script>
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


 
  <!-- Modal Update Pasien -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>UPDATE DATA PASIEN</h2></center>
      </div>
      <div class="modal-body">

      <form method="POST" id="formTambah">

      <!-- isi form ini -->
      <form method="POST" id="formUpdate">

        <div class="form-group">
          <label for="formGroupExampleInput">Username</label>
          <input type="text" class="form-control" id="usernInput" placeholder="Username Pasien" name="usernameP" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Nama</label>
          <input type="text" class="form-control" id="namaInput" placeholder="Nama Pasien" name="namaP" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Alamat</label>
          <input type="text" class="form-control" id="alamatInput" placeholder="Alamat Pasien" name="alamatP" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Usia</label>
          <input type="text" class="form-control" id="usiaInput" placeholder="Usia Pasien" name="usiaP" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Jenis Kelamin</label>
          <input type="text" class="form-control" id="jkInput" placeholder="Jenis Kelamin Pasien" name="jkP" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" id="updateSubmit">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>



<!-- Modal Delete Pasien-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete <?= $title ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin ingin menghapus user ini? <span id="dataUser"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="deleteButton">Delete</button>
      </div>
    </div>
  </div>
</div>

  <!-- Modal Update Dokter -->
<div class="modal fade" id="updateModald" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>UPDATE DATA DOKTER</h2></center>
      </div>
      <div class="modal-body">

        <!-- isi form ini -->
        <form method="POST" id="formUpdated">

          <div class="form-group">
            <label for="formGroupExampleInput">Username</label>
            <input type="text" class="form-control" id="userInput" placeholder="Username Dokter" name="usernameD" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Nama</label>
            <input type="text" class="form-control" id="nmInput" placeholder="Nama Dokter" name="namaD" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Rating</label>
            <input type="text" class="form-control" id="ratingInput" placeholder="Rating Dokter" name="ratingD" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Usia</label>
            <input type="text" class="form-control" id="ageInput" placeholder="Usia Dokter" name="usiaD" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary" id="ubahSubmit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Tambah Dokter -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">TAMBAH DATA DOKTER</h5>
    </div>
    <div class="modal-body">

      <form method="POST" id="formTambahD">
        <div class="form-group">
          <label for="formGroupExampleInput">Username</label>
          <input type="text" class="form-control" id="userInput" placeholder="Username Dokter" name="usernameD" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Password</label>
          <input type="password" class="form-control" id="passwordInput" placeholder="Nama Dokter" name="passwordD" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Nama</label>
          <input type="text" class="form-control" id="namaInput" placeholder="Nama Dokter" name="namaD" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Rating</label>
          <input type="text" class="form-control" id="ratingInput" placeholder="Rating Dokter" name="ratingD" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Usia</label>
          <input type="text" class="form-control" id="ageInput" placeholder="Usia Dokter" name="usiaD" required>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary" id="tambahSubmit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>


</body>
</html>
