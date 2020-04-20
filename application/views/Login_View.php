<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #000000;">
  <a class="navbar-brand" href="#">Health Home</a>
  <!-- <img src="<?= base_url('assets/healthhome.png') ?>" alt="logo"> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<?= $this->session->flashdata('message'); ?>
<form method="POST" action="<?php echo site_url('Welcome/login') ?>">
  <div class="form-group">
    <label for="username">username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>