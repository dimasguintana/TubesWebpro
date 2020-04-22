<?php $this->load->view('template/atas2'); ?>
<!-- GET SEMUA DATA JADWAL -->
  <div class="py-5">
    <h1 class="text-center"><?= $title ?></h1>
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
            return `<button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-whatever="${data}"><i class="fas fa-user-times"></i></button>`
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
});
</script>

