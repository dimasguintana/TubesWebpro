<!-- <nav class="navbar navbar-expand-sm navbar-dark" style= 'background-color: transparent;'>
  <img src="<?= base_url('assets/healthhome.png') ?>" alt="logo" width=50 height=50>
  <a class="navbar-brand" href="#" style= 'color: #000000'> Health Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav> -->
<?php $this->load->view('template/atas'); ?>
<?= $this->session->flashdata('message'); ?>
<div class="container-fluid "  >
  <div class="row">
    <div style="height: 90vh; width: 100%" class="d-flex align-items-stretch">
      <div class="col-6 d-flex align-items-center justify-content-center"><img src="<?= base_url('assets/doctor3.jpg') ?>"alt="logo" width='100%' height='450'></div>
      <div class="p-3 mb-2 text-black col-6 d-flex align-items-center justify-content-center flex-column ">
      <h1 style=" color: #FF4F5A; font-size: 50;
        -webkit-text-stroke-width: 0.5px;
        -webkit-text-stroke-color: black;"><?= $title ?></h1>
        <form class='p-5' method="POST" action="<?php echo site_url('Welcome/login') ?>" style= 'background-color: #FF4F5A; border-radius: 25px'>
        <div class="form-group">
          <label class='text-light' for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Username">
        </div>
        <div class="form-group">
          <label class='text-light' for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <div class="d-flex align-items-center">
          <button type="submit" class="btn btn-light mr-auto">Login</button>
        <a class='text-light' href="<?= site_url('Welcome/register') ?>">Sign up</a>
      </div>
      </form>
      <?= $this->session->userdata('username')?>
      </div>
    </div>
  </div>
</div>

