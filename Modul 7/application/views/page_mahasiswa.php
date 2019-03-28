  <div class="container">
  	<div class="box">
      <h2>Data Mahasiswa</h2>
      <p>Tabel Data Mahasiswa Telkom Univerity</p>            
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Fakultas</th>
            <th class="text-center">Foto</th>
          </tr>
        </thead>
        <tbody>

              <?php $no=1; foreach ($data as $mhs): ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $mhs->nim ?></td>
                    <td><?php echo $mhs->nama ?></td>
                    <td><?php echo $mhs->kelas ?></td>
                    <td><?php echo $mhs->nama_jurusan ?></td>
                    <td><?php echo $mhs->fakultas ?></td>
                    <td> <img src="<?php echo base_url('assets/Foto/'.$mhs->foto); ?>" alt="" width="100"></td>
                  </tr>

              <?php endforeach ?>

        </tbody>
          
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
