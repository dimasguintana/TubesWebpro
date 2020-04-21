<!-- GET SEMUA DATA PASIEN -->
  <div class="py-5">
    <h1 class="text-center"><?= $title ?></h1>
    <div class="table-responsive container">
    <div class="d-flex justify-content-end">
      <button class="btn btn-primary" data-target="#tambahPasien" data-toggle="modal">Tambah Pasien</button>
    </div>                                                        <!-- id table -->
      <table class="table table-dark table-hover table-bordered" id="datapasien" style="width: 100%">
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
      "columns": [
        {
          "data": "username_pasien"
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
          "data": "username_pasien",
          "render": function(data, type, row){
            return `<button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-whatever="${data}"><i class="fas fa-user-times"></i></button>`
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
  $('#formTambah').on('submit', function(event) {
      event.preventDefault();
      let form = $(this);
      $.ajax({
        url: '<?= site_url('Pasien/tambahPasien') ?>',
        type: 'post',
        data: form.serialize(),
        dataType: 'JSON',
        success: function(data){
          if (data.cek == true) {
            $("#tambahPasien").modal('hide')
            $('#datapasien').DataTable().ajax.reload()     
          }
          else {
            console.log("error")
          }
        }
      })      
  });
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
          $('#datapasien').DataTable().ajax.reload()
        })
    });
});
</script>