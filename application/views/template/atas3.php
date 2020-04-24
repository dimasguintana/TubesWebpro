<!-- pasien -->
<nav class="navbar navbar-expand-sm navbar-dark" style= 'background-color: #1A2E35;'>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  	<img src="<?= base_url('assets/logo-2.jpg') ?>" alt="logo" width=50 height=50 >
   	<a class="navbar-brand" href="<?= site_url('Pasien') ?>" style= 'color: #FFFFFF;  margin-left: 10px'> Health Home</a>
   	<a class="nav-item nav-link" href="<?= site_url('Booking') ?>" style= 'color: #FFFFFF;  margin-left: 10px'>Booking <span class="sr-only">(current)</span></a>
   	<a class="nav-item nav-link" href="<?= site_url('Welcome/pasienv2')?>" style= 'color: #FFFFFF;  margin-left: 10px'>Cari Jadwal</a>
  </div>
  <div class="d-flex justify-content-end">
    <a class="nav-item nav-link" href="<?= site_url('Welcome/logout') ?>" style= 'color: #FFFFFF;'>Logout</a>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>