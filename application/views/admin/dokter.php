
<div class="container">
<br>
<div>
    <a href="<?php echo base_url()?>index.php/admin_controller/"><button class="btn btn-primary">Pasien</button></a>
    <a href="<?php echo base_url()?>index.php/admin_controller/jadwal"><button class="btn btn-primary">Jadwal Praktik</button></a>
</div>
<br>
<div>
    <h3>Data Dokter</h3>
    <hr>
</div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Dokter</th>
                <th>Rate</th>
                <th>Umur</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($pasien as $row) {?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['rating']; ?></td>
                <td><?php echo $row['usia']; ?></td>
                 <td><a type="button" class="btn btn-danger" href="<?php echo base_url()?>index.php/admin_controller/hapusdokter/<?php echo $row['username_dokter'];?>" onClick="return confirm('Apakah Anda Yakin?')"><i class="fa fa-user-times"></i></a></td>
            </tr>
         <?php } ?>
        </tbody>
    </table>
</div>
    <script type="text/javascript">
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>