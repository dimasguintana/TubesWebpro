<div class="py-5">
    <h1 class="text-center"><?= $title ?></h1>
    <div class="table-responsive container">
    <div class="d-flex justify-content-end">
    </div>                                                        <!-- id table -->
      <table class="table table-dark table-hover table-bordered" id="dataJadwal" style="width: 100%">
        <thead>
          <tr>
            <th>Username Pasien </th>
            <th>Username Dokter</th>
            <th>Username Admin</th>
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
          "data": "username Pasien"
        },
        {
          "data": "Username Dokter"
        },
        {
          "data": "Username Admin"
        },
        {
          "data": "Tanggal"
        },
        {
          "data": "Jam"
        },
        {
          "data": "Ruangan"
        }
      ]
  });
});
</script>