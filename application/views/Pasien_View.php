<?php $this->load->view('template/atas2'); ?>
<!-- GET SEMUA DATA PASIEN -->
  <div class="py-5">
    <h1 class="text-center"><?= $title ?></h1>
    <div class="table-responsive container">
    <div class="d-flex justify-content-end">
      <button class="btn btn-primary" data-target="#tambahpasien" data-toggle="modal">Tambah Pasien</button>
    </div>                                                        <!-- id table -->
      <table class="table table-dark table-hover table-bordered" id="datapasien" style="width: 100%">
        <thead>
          <tr>
            <th>Username</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Usia</th>
            <th></th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
<script type="text/javascript">
  $(document).ready(function() {
    let table = $('#datapasien').dataTable({
      "searching": false,
      "ordering": true,
      "order": [
        [1, 'asc']
      ],
      "ajax": {
        "url": "<?= site_url('Pasien/allPasien') ?>",
        "type": "GET",
        "dataSrc": ""
      },
      "columns": [{
          "data": "username"
        },
        {
          "data": "nama"
        },
        {
          "data": "jeniskelamin"
        },
        {
          "data": "alamat"
        },
        {
          "data": "usia"
        },
        {
          "data": "username",
          "render": function(data, type, row) {
            return `<button class="btn btn-danger" data-toggle="modal" data-target="#updateModal" data-whatever="${data}"><i class="far fa-edit"></i></button>`
          }
        }
      ]
  });
  // $.ajax({
  //   url:"<?= site_url('Controller_Pasien/allpasien')?>", 
  //   type: "GET",
  //   async : true,
  //   dataType : "JSON",
  //   success : function(data){
  //     console.log(data);
  //   }
  // })
  $('#formRegister').on('submit', function(event) {
      event.preventDefault();
      let form = $(this);
      $.ajax({
        url: '<?= site_url('Pasien/tambahPasien') ?>',
        type: 'post',
        data: form.serialize(),
        dataType: 'JSON',
        success: function(data){
          if (data.cek == true) {
            alert("registrasi sukses")   
          }
          else {
            console.log("error")
          }
        }
      })
      
  });

  $('#updateModal').on('show.bs.modal', function(event) {
    let username = $(event.relatedTarget).data('whatever');
    let modal = $(this)
    modal.find('#dataName').text(username)
    $('#updateButton')
  });

});
</script>
