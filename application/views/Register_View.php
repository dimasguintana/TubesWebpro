<?php $this->load->view('template/atas'); ?>
<?= $this->session->flashdata('message'); ?>
<div class="container-fluid "  >
  <div class="row">
    <div style="height: 90vh; width: 100%" class="d-flex align-items-stretch">
      <div class="col-6 d-flex align-items-center justify-content-center"><img src="<?= base_url('assets/doctor3.jpg') ?>"alt="logo" width='100%' height='450'></div>
      <div class="p-3 mb-2 text-black col-6 d-flex align-items-center justify-content-center flex-column">
        <h1 style=" color: #FF4F5A; font-size: 50;
        -webkit-text-stroke-width: 0.5px;
        -webkit-text-stroke-color: black;">Register</h1>
      <form class='p-5' method="POST" action="<?=site_url('Pasien/tambahPasien') ?>" style= 'background-color: #FF4F5A; border-radius: 25px'>
        <div class="form-row">
    <div class="form-group col-md-6">
      <label class='text-light'for="inputEmail4">Username</label>
      <input type="text" class="form-control" name="usernameP" placeholder="Username">
    </div>
    <div class="form-group col-md-6">
      <label class='text-light'for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="passwordP" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label class='text-light'for="inputAddress">Nama</label>
    <input type="text" class="form-control" name="namaP" placeholder="Nama">
  </div>
  <div class="form-group">
    <label class='text-light'for="inputAddress2">Alamat</label>
    <input type="text" class="form-control" name="alamatP" placeholder="Alamat">
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label class='text-light'for="inputAddress2">Usia</label>
    <input type="text" class="form-control" name="usiaP" placeholder="Usia">
  </div>
  <div class="form-group col-md-6">
      <label class='text-light'for="inputState">Jenis Kelamin</label>
      <select name="jeniskelamin" class="form-control">
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
  </div>
    <button type="submit" class="btn btn-light mr-auto" id="register">Register</button>
      </form>
      </div>
    </div>
  </div>