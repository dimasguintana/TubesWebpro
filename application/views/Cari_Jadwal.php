<?php $this->load->view('template/atas3'); ?>
<?php $this->load->view('template/carousel');?>
 <div class="py-2">
    <h1 class="text-center">Daftar Jadwal</h1>
    <div class="text-center">
    <div>
    </div>
    <div class="table-responsive container">
    <div class="d-flex justify-content-end">
    </div>                                                        <!-- id table -->
      <table class="table table-dark table-hover table-bordered" id="dataJadwalPasien" style="width: 100%">
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
    let table = $('#dataJadwalPasien').dataTable({
      // "searching": false,
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
});
</script>