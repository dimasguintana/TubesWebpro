<?php $this->load->view('template/atas3'); ?>
<?php $this->load->view('template/carousel');?>
<div class="p-3 mb-2 text-black d-flex align-items-center justify-content-center flex-column">
        <h1 style=" color: #FF4F5A; font-size: 50;
        -webkit-text-stroke-width: 0.5px;
        -webkit-text-stroke-color: black;">Booking</h1>
      <form class='p-5' method="POST" action="#" style= 'background-color: #FF4F5A; border-radius: 25px'>
	  <div class="form-group ">
	      <label class='text-light'for="inputState">Pilih Dokter</label>
	      <select name="pilihdokter" class="form-control">
	        <option value="Dokter1">Dokter1</option>
	        <option value="Dokter2">Dokter2</option>
	      </select>
	  </div >
	  <div class="form-group ">
	      <label class='text-light'for="inputState">Pilih Jadwal</label>
	      <select name="jeniskelamin" class="form-control">
	        <option value="1">belomada</option>
	        <option value="1">belomada</option>
	      </select>
	  </div >
	  <div class="d-flex align-items-center">
	    <button type="submit" class="btn btn-light mr-auto" id="register" data-toggle="modal" data-target="#registrasiModal">Book</button>
	   </div>
      </form>
      </div>