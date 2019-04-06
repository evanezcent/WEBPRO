  <div class="container">
    <div class="box">
      <h2>Data Mahasiswa</h2>
      <p>Tabel Data Mahasiswa Telkom Univerity</p>            
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit1">TAMBAH MAHASISWA</button>
      <br><br>
      <table class="table table-bordered" id="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Fakultas</th>
            <th>Edit</th>
            <th>Hapus</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach ($data as $d ) {?>
          <tr>
        <!--HINT UNTUK MENGHAPUS USER KALIAN DAPAT MENGGUNAKAN FORM, MENGGUNAKAN ANCHOR ATAU HREF PADA BUTTON-->
            <form action="">
              <td><?php echo $no++ ?></td>
              <td><?php echo $d->nim ?></td>
              <td><?php echo $d->nama ?></td>
              <td><?php echo $d->kelas ?></td>
              <td><?php echo $d->nama_jurusan ?></td>
              <td><?php echo $d->fakultas ?></td>

              <!--BUTTON EDIT MAHASISWA-->
              <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $d->nim ?>"><i class="fas fa-user-edit"></i></button></td>
              <!--BUTTON HAPUS --- ISI LENGKAPI BUTTON INI -->
              <td><a type="button" class="btn btn-danger"  href="<?php echo base_url(); ?>/index.php/web/hapusmahasiswa/<?= $d->nim ?>" onClick="return confirm('Apakah Anda Yakin?')" ><i class="fas fa-user-times"></i></a></td>
            </form>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

<!-- Modal Edit Mahasiswa -->

<?php $no=1; foreach ($data as $d ) {?>
  <div class="modal fade" id="edit<?php echo $d->nim ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>EDIT DATA MAHASISWA </h2></center>
        </div>
        <div class="modal-body">
        <!-- isi form ini -->
        <form method="post" action="<?php echo base_url(); ?>/index.php/web/editmahasiswa">
        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Nim" name="nim" value="<?php echo $d->nim ?>"  required>
          <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama"  value="<?php echo $d->nama ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Kelas</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Kelas" name="kelas" value="<?php echo $d->kelas ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Jurusan</label>
            <select class="form-control" id="formGroupExampleInput2" name="jurusan" required>
            <option value="<?php echo '1'; ?>" selected><?php echo $d->nama_jurusan.' - '.$d->fakultas;  ?></option>
            <?php foreach ($dataJ as $c ) {?>
                <option value="<?php echo '1'; ?>"><?php echo $c->nama_jurusan.' - '.$c->fakultas;  ?></option>
            <?php } ?>
            </select>            
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

<!-- Modal Tambah Mahasiswa -->
<div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>TAMBAH DATA MAHASISWA</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="<?php echo base_url(); ?>/index.php/web/tambahmahasiswa">
        <div class="form-group">
          <label for="formGroupExampleInput">NIM</label>
          <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Nim" name="nim" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Nama</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Kelas</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Kelas" name="kelas" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Jurusan</label>
          <select class="form-control" id="formGroupExampleInput2" name="jurusan" required>
          <?php foreach ($dataJ as $d ) {?>
            <option value="<?php echo '1'; ?>" ><?php echo $d->nama_jurusan.' - '.$d->fakultas;  ?></option>
          <?php } ?>
          </select>            
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


</body>
  <script type="text/javascript">
    $(document).ready( function () {
        $('#table').DataTable();
    } );
  </script>
</html>
