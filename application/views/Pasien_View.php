
<!-- GET SEMUA DATA PASIEN -->
  <div class="py-5">
    <h1 class="text-center"><?= $title ?></h1>
    <div class="table-responsive container">
    <div class="d-flex justify-content-end">
      <button class="btn btn-primary" data-target="#tambahpasien" data-toggle="modal">Tambah Pasien</button>
    </div>                                                        <!-- id table -->
      <table class="table table-dark table-hover table-bordered" id="datapasien" style="width: 100%">
        <thead>
          <tr>
            <th>no</th>
            <th>Id Pasien</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Usia</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach ($data as $d ) {?>
          <tr>
        <!--HINT UNTUK MENGHAPUS USER KALIAN DAPAT MENGGUNAKAN FORM, MENGGUNAKAN ANCHOR ATAU HREF PADA BUTTON-->
            <form action="">
              <td><?php echo $no++ ?></td>
              <td><?php echo $d->id_pasien ?></td>
              <td><?php echo $d->Nama ?></td>
              <td><?php echo $d->jenis_kelamin ?></td>
              <td><?php echo $d->alamat ?></td>
              <td><?php echo $d->usia ?></td>

              <!--BUTTON EDIT MAHASISWA-->
             <!--  <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $d->nim ?>"><i class="fas fa-user-edit"></i></button></td>
              BUTTON HAPUS --- ISI LENGKAPI BUTTON INI 
              <td><a type="button" class="btn btn-danger"  href="<?= base_url('index.php/web/hapusmahasiswa/').$d->nim?>" onClick="return confirm('Apakah Anda Yakin?')" ><i class="fas fa-user-times"></i></a></td> -->
            </form>
          </tr>
          <?php } ?>
        </tbody>
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
            $("#tambahpasien").modal('hide')
            $('#datapasien').DataTable().ajax.reload()     
          }
          else {
            console.log("error")
          }
        }
      })
      
  });
});
</script>
