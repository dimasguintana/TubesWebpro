
<?php $this->load->view('template/atas2'); ?>
<!-- GET SEMUA DATA PASIEN -->
  <div class="py-5">
    <h1 class="text-center"><?= $title ?></h1>
    <div class="table-responsive container">
    <div class="d-flex justify-content-end">

    </div>                                                        <!-- id table -->
      <table class="table table-dark table-hover table-bordered" id="dataPasien" style="width: 100%">
        <thead>
          <tr>
            <th>Username</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Usia</th>
            <th>Action</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
<script type="text/javascript">
  $(document).ready(function() {
    let table = $('#dataPasien').dataTable({
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

      "columns": [
        {
          "data": "username"
        },
        {
          "data": "nama"
        },
        {
          "data": "alamat"
        },
        {
          "data": "usia"
        },
        {
          "data": "username",
          "render": function(data, type, row){
            return `<button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-whatever="${data}"><i class="fas fa-user-times"></i></button><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModal" data-whatever="${data}"><i class="fas fa-user-edit"></i></button>` 
          }
        }
      ]
  });
  // $.ajax({
  //   url:"<?= site_url('Pasien/allpasien')?>", 
  //   type: "GET",
  //   async : true,
  //   dataType : "JSON",
  //   success : function(data){
  //     console.log(data);
  //   }
  // })

//Delete
  $('#deleteModal').on('show.bs.modal', function(event) {
        let username = $(event.relatedTarget).data('whatever');
        let del = $(this)
        del.find('#dataUser').text(username)
        $('#deleteButton').on('click',function() {
          $.ajax({
            url: `<?= site_url('Pasien/deletePasien/') ?>${username}`,
            type: "GET",
            async: true,
            dataType: "JSON"
          })
          $("#deleteModal").modal('hide')
          $('#dataPasien').DataTable().ajax.reload()
        })
    });

  $('#updateModal').on('show.bs.modal', function(event) {
    let username = $(event.relatedTarget).data('whatever');
    $.ajax({
      url: `<?= site_url('Pasien/getPasienByUsername/') ?>${username}`,
      type: "GET",
      dataType: "JSON",
      success: function(data) {
        if (data) {
          $('#usernInput').val(data.username);
          $('#namaInput').val(data.nama);
          $('#alamatInput').val(data.alamat);
          $('#usiaInput').val(data.usia);
          $('#jkInput').val(data.jeniskelamin);
        }
      }
    })
    $('#formUpdate').on('submit', function(event) {
      event.preventDefault();
      let form = $(this)
      $.ajax({
        url: `<?= site_url('Pasien/updatePasien/') ?>${username}`,
        type: "POST",
        data: form.serialize(),
        dataType: "JSON",
        success: function(kesuksesan) {
          if (kesuksesan.sukses) {
            $("#updateModal").modal('hide')
            $('#dataPasien').DataTable().ajax.reload()
            $('#usernInput').val('');
            $('#namaInput').val('');
            $('#alamatInput').val('');
            $('#usiaInput').val('');
            $('#jkInput').val('');
          }
        }
      })
    })
  });

});
</script>
