<?php $this->load->view('template/atas3'); ?>
<?php $this->load->view('template/carousel');?>
<div class="p-3 mb-2 text-black d-flex align-items-center justify-content-center flex-column">
        <h1 style=" color: #FF4F5A; font-size: 50;
        -webkit-text-stroke-width: 0.5px;
        -webkit-text-stroke-color: black;">Booking</h1>
      <form class='p-5' method="POST" action="#" style= 'background-color: #FF4F5A; border-radius: 25px'>
	  <div class="form-group ">
	      <label class='text-light'for="inputState">Pilih Dokter</label>
	      <select name="pilDokter" class="form-control" id="pilDokter">
	      	<option>No Selected</option>
	        <?php foreach ($dokter as $dok): ?>
	        	<option value="<?= $dok['username'] ?>"><?= $dok['nama'] ?></option>
	        <?php endforeach; ?>
	      </select>
	  </div >
	  <div class="form-group ">
	      <label class='text-light'for="inputState">Pilih Jadwal</label>
	      <select name="sub_category" id="sub_category" class="form-control" required>
	      	<option>No Selected</option>
	      </select>
	  </div >
	  <div class="d-flex align-items-center">
	    <button type="submit" class="btn btn-light mr-auto" id="register" data-toggle="modal" data-target="#registrasiModal">Book</button>
	   </div>
      </form>
      </div>


 <script type="text/javascript">

 $(document).ready(function(){
 
            $('#pilDokter').change(function(){ 
                var username=$(this).val();
                $.ajax({
                    url : "<?= site_url('Booking/getJadwalByDokter');?>",
                    method : "POST",
                    data : {username_dokter: username},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                             html += '<option value='+data[i].id_jadwal+'>'+data[i].tanggal+' ('+data[i].jam+')'+'</option>';
                        }
                        $('#sub_category').html(html);
 
                    }
                });
                return false;
            }); 
             
        });
 </script>