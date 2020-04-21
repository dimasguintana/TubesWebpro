<!-- GET SEMUA DATA DOKTER -->
  <div class="py-5">
    <h1 class="text-center"><?= $title ?></h1>
    <div class="table-responsive container">
    <div class="d-flex justify-content-end">
      <button class="btn btn-primary" data-target="#tambahPasien" data-toggle="modal">Tambah Pasien</button>
    </div>
      <table class="table table-dark table-hover table-bordered" id="dataDokter" style="width: 100%">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Rating</th>
            <th>Usia</th>
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
          "data": "nama"
        },
        {
          "data": "rating"
        },
        {
          "data": "usia"
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
});
</script>
