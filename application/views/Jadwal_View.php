<?php $this->load->view('template/atas2'); ?>
<!-- GET SEMUA DATA JADWAL -->
  <div class="py-5">
    <h1 class="text-center"><?= $title ?></h1>
    <div class="table-responsive container">                <!-- id table -->
      <table class="table table-dark table-hover table-bordered" id="dataJadwal" style="width: 100%">
        <thead>
          <tr>
            <th>Nama Pasien</th>
            <th>Nama Dokter</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Ruangan</th>
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
});
</script>
