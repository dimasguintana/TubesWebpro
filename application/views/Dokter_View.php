<?php $this->load->view('template/atas2'); ?>
<!-- GET SEMUA DATA DOKTER -->
  <div class="py-5">
    <h1 class="text-center"><?= $title ?></h1>
    <div class="text-center">
      <button class="btn btn-success" data-toggle="modal" data-target="#tambahModal">
        <i class="fas fa-user-plus"></i> Tambah Data Dokter
      </button>
    </div>
    <div class="table-responsive container">
    <div class="d-flex justify-content-end">
    </div>
      <table class="table table-dark table-hover table-bordered" id="dataDokter" style="width: 100%">
        <thead>
          <tr>
            <th>Username</th>
            <th>Nama</th>
            <th>Rating</th>
            <th>Usia</th>
            <th>Action</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
<script type="text/javascript">
  $(document).ready(function() {
    let table = $('#dataDokter').dataTable({
      "searching": false,
      "ordering": true,
      "order": [
        [1, 'asc']
      ],
      "ajax": {
        "url": "<?= site_url('Dokter/allDokter') ?>",
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
          "data": "rating"
        },
        {
          "data": "usia"
        },
        {
          "data": "username",
          "render": function(data, type, row){
            return `<button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-whatever="${data}"><i class="fas fa-user-times"></i></button><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModald" data-whatever="${data}"><i class="fas fa-user-edit"></i></button>` 
          }
        }
      ]
  });
  // $.ajax({
  //   url:"<?= site_url('Dokter/allDokter')?>", 
  //   type: "GET",
  //   async : true,
  //   dataType : "JSON",
  //   success : function(data){
  //     console.log(data);
  //   }
  // })

  $('#deleteModal').on('show.bs.modal', function(event) {
        let username = $(event.relatedTarget).data('whatever');
        let del = $(this)
        del.find('#dataUser').text(username)
        $('#deleteButton').on('click',function() {
          $.ajax({
            url: `<?= site_url('Dokter/deleteDokter/') ?>${username}`,
            type: "GET",
            async: true,
            dataType: "JSON"
          })
          $("#deleteModal").modal('hide')
          $('#dataDokter').DataTable().ajax.reload()
        })
    });

  $('#tambahModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })

  $('#updateModald').on('show.bs.modal', function(event) {
    let username = $(event.relatedTarget).data('whatever');
    $.ajax({
      url: `<?= site_url('Dokter/getDokterByUsername/') ?>${username}`,
      type: "GET",
      dataType: "JSON",
      success: function(data) {
        if (data) {
          $('#userInput').val(data.username);
          $('#nmInput').val(data.nama);
          $('#ratingInput').val(data.rating);
          $('#ageInput').val(data.usia);
        }
      }
    })
    $('#formUpdated').on('submit', function(event) {
      event.preventDefault();
      let form = $(this)
      $.ajax({
        url: `<?= site_url('Dokter/updateDokter/') ?>${username}`,
        type: "POST",
        data: form.serialize(),
        dataType: "JSON",
        success: function(valid) {
          if (valid.sukses) {
            $("#updateModald").modal('hide');
            $('#dataDokter').DataTable().ajax.reload();
            $('#userInput').val('');
            $('#nmInput').val('');
            $('#ratingInput').val('');
            $('#ageInput').val('');
          }
        }
      })
    })
  });

});
</script>
