<!-- GET SEMUA DATA PASIEN -->
  <div class="py-5">
    <h1 class="text-center"><?= $title ?></h1>
    <div class="table-responsive container">                <!-- id table -->
      <table class="table table-dark table-hover table-bordered" id="datapasien" style="width: 100%">
        <thead>
          <tr>
            <th>nama</th>
            <th>alamat</th>
            <th>usia</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
<script type="text/javascript">
  $(document).ready(function() {
    let table = $('#datapasien').DataTable({
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
          "data": "nama"
        },
        {
          "data": "alamat"
        },
        {
          "data": "usia"
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
  });
</script>