  <div class="container">
    <div class="box">
      <h2>Data Jurusan</h2>
      <p>Tabel Data Jurusan Telkom Univerity</p>            
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahjurusan">TAMBAH JURUSAN</button>
      <br><br>
      <table class="table table-bordered" id="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Jurusan</th>
            <th>Nama Fakultas</th>
            <th>Akreditasi</th>
            <th>Edit</th>
            <th>Hapus</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach ($data as $d ) {?>
          <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $d->nama_jurusan?></td>
            <td><?php echo $d->fakultas ?></td>
            <td><?php echo $d->akreditasi ?></td>
            <!--BUTTON EDIT-->
            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editJ<?php echo $d->id_jurusan ?>"><i class="fas fa-user-edit"></i></button></td>
            <!--BUTTON HAPUS --- ISI LENGKAPI BUTTON INI -->
            <td><a type="button" class="btn btn-danger"  href="<?php echo base_url(); ?>/index.php/web/hapusjurusan/<?= $d->id_jurusan ?>" onClick="return confirm('Apakah Anda Yakin?')" ><i class="fas fa-user-times"></i></a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>


<!-- Modal Tambah Jurusan -->

<div class="modal fade" id="tambahjurusan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>TAMBAH DATA JURUSAN</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="<?php echo base_url(); ?>/index.php/web/tambahjurusan">
        <div class="form-group">
          <label for="formGroupExampleInput">Nama Jurusan</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Jurusan" name="njurusan" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Nama Fakultas</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Fakultas" name="nfakultas"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Akreditasi</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Akreditasi" name="akreditasi" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
      </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal Edit JURUSAN -->

<?php $no=1; foreach ($data as $d ) {?>
  <div class="modal fade" id="editJ<?php echo $d->id_jurusan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>EDIT DATA <?php echo $d->nama_jurusan ?> </h2></center>
        </div>
        <div class="modal-body">
        <!-- isi form ini -->
        <form method="post" action="<?php echo base_url(); ?>/index.php/web/editjurusan">
        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="id_jurusan" name="id_jurusan" value="<?php echo $d->id_jurusan ?>"  required>
        <div class="form-group">
          <label for="formGroupExampleInput">Nama Jurusan</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Jurusan" name="njurusan" value="<?php echo $d->nama_jurusan ?>" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Nama Fakultas</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Fakultas" name="nfakultas" value="<?php echo $d->fakultas ?>"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Akreditasi</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Akreditasi" name="akreditasi" value="<?php echo $d->akreditasi ?>" required>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
        </div>
        </form>
      </div>
    </div>
  </div>
<?php } ?>

</body>
<script type="text/javascript">
  $(document).ready( function () {
    $('#table').DataTable();
} );
</script>
</html>
