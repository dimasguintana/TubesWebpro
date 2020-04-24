<?php $this->load->view('template/atas2'); ?>
<?php $this->load->view('template/carousel');?>
<!-- GET SEMUA DATA JADWAL CUY -->
  <div class="py-2">
    <h1 class="text-center"><?= $title ?></h1>
    <div class="text-center">
    <button class="btn btn-success" data-toggle="modal" data-target="#tambahJadwalModal">
      <i class="fas fa-user-plus"></i> Tambah Jadwal
    </button>
    <div>
    </div>
    <div class="table-responsive container">
    <div class="d-flex justify-content-end">
    </div>                                                        <!-- id table -->
      <table class="table table-dark table-hover table-bordered" id="dataJadwal" style="width: 100%">
        <thead>
          <tr>
            <th>Nama Pasien</th>
            <th>Nama Dokter</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Ruangan</th>
            <th>Action</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
  <script type="text/javascript">
  $(document).ready(function() {
    let table = $('#dataJadwal').dataTable({
      "searching": false,
      "ordering": true,
      "order": [
        [1, 'asc']
      ],
      "ajax": {
        "url": "<?= site_url('Jadwal/allJadwal') ?>",
        "type": "GET",
        "dataSrc": ""
      },
      "columns": [
        {
          "data": "namapasien"
        },
        {
          "data": "nama"
        },
        {
          "data": "tanggal"
        },
        {
          "data": "jam"
        },
        {
          "data": "ruangan"
        },
        {
          "data": "id_jadwal",
          "render": function(data, type, row){
            return `<button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-whatever="${data}"><i class="fas fa-user-times"></i></button><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateJadwalModal" data-whatever="${data}"><i class="fas fa-user-edit"></i></button>`
          }
        }
      ]
  });


//   $.ajax({
//     url:"<?= site_url('Jadwal/allJadwal')?>", 
//     type: "GET",
//     async : true,
//     dataType : "JSON",
//     success : function(data){
//       console.log(data);
//     }
//   })

  $('#formTambahJ').on('submit', function(event) {
      event.preventDefault();
      let form = $(this);
      $.ajax({
        url: '<?= site_url('Jadwal/tambahJadwal') ?>',
        type: 'post',
        data: form.serialize(),
        dataType: 'JSON',
        success: function(data){
          console.log(data)
          if (data.cek == true) {
            console.log("berhasil")
            $("#tambahJadwalModal").modal('hide')
            $('#dataJadwal').DataTable().ajax.reload()
          }
          else {
            console.log("error")
          }
        }
        // error: function(XMLHttpRequest, textStatus, errorThrown) { 
        //   console.log(data)
        //   alert("Status: " + textStatus); alert("Error: " + errorThrown); 
        // } 
      })
  });

//Delete
  $('#deleteModal').on('show.bs.modal', function(event) {
        let id_jadwal = $(event.relatedTarget).data('whatever');
        console.log(id_jadwal)
        let del = $(this)
        del.find('#dataUser').text(id_jadwal)
        $('#deleteButton').on('click',function() {
          $.ajax({
            url: `<?= site_url('Jadwal/deleteJadwal/') ?>${id_jadwal}`,
            type: "GET",
            async: true,
            dataType: "JSON"
          })
          $("#deleteModal").modal('hide')
          $('#dataJadwal').DataTable().ajax.reload()
        })
    });

//Modal Update Jadwal
  $('#updateJadwalModal').on('show.bs.modal', function(event) {
    let id_jadwal = $(event.relatedTarget).data('whatever');
    $.ajax({
      url: `<?= site_url('Jadwal/getJadwalById/') ?>${id_jadwal}`,
      type: "GET",
      dataType: "JSON",
      success: function(data) {
        if (data) {
          $('#tglInput').val(data.tanggal);
          $('#timeInput').val(data.jam);
        }
      }
    })
    $('#formUpdateJ').on('submit', function(event) {
      event.preventDefault();
      let form = $(this)
      $.ajax({
        url: `<?= site_url('Jadwal/updateJadwal/') ?>${id_jadwal}`,
        type: "POST",
        data: form.serialize(),
        dataType: "JSON",
        success: function(kesuksesan) {
          if (kesuksesan.sukses) {
            $("#updateJadwalModal").modal('hide');
            $('#dataJadwal').DataTable().ajax.reload();
            $('#admInput').val('');
            $('#tglInput').val('');
            $('#timeInput').val('');
          }
        }
      })
    })
  });

});
</script>

