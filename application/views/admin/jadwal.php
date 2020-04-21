
<div class="container">
<br>
<div>
    <a href="<?php echo base_url()?>index.php/admin_controller/"><button class="btn btn-primary">Pasien</button></a>
    <a href="<?php echo base_url()?>index.php/admin_controller/dokter"><button class="btn btn-primary">Dokter</button></a>
</div>
<br>
<div>
    <h3>Data Jadwal Praktik</h3>
    <hr>
</div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Username Pasien</th>
                <th>Username Dokter</th>
                <th>Username Admin</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Ruangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($pasien as $row) {?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['username_pasien']; ?></td>
                <td><?php echo $row['username_dokter']; ?></td>
                <td><?php echo $row['username_admin']; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
                <td><?php echo $row['jam']; ?></td>
                <td><?php echo $row['ruangan']; ?></td>
                 <td>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $row['id_jadwal']; ?>"><i class="fas fa-user-edit"></i></button>
                    <a type="button" class="btn btn-danger" href="<?php echo base_url()?>index.php/admin_controller/hapusjadwal/<?php echo $row['id_jadwal'];?>" onClick="return confirm('Apakah Anda Yakin?')"><i class="fa fa-user-times"></i></a></td>
            </tr>
         <?php } ?>
        </tbody>
    </table>
</div>
<?php $no=1; foreach ($pasien as $row ) {?>
    <div class="modal fade" id="edit<?php echo $row['id_jadwal']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <center><h2>Edit Jadwal</h2></center>
                </div>
                <div class="modal-body">
                    <!-- isi form ini -->
                    <form method="post" action="<?php echo base_url('index.php/admin_controller/editjadwal/'); ?>">
                        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Id Jadwal" name="id_jadwal" value="" required>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Username Pasien</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username Pasien" name="upasien" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Username Dokter</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username Dokter" name="udokter" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Username Admin</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username Admin" name="uadmin" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Tanggal</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Tanggal" name="tanggal" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Jam</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Jam" name="jam" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Ruangan</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ruangan" name="ruang" value="" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <input type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
                </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
    <script type="text/javascript">
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>