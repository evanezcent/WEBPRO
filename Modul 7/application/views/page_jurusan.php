  <div class="container">
	  <div class="box">
      <h2>Data Jurusan</h2>
      <p>Tabel Data Jurusan Telkom Univerity</p>            
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Jurusan</th>
            <th>Nama Fakultas</th>
            <th>Akreditasi</th>
            <th>Jumlah Mahasiswa</th>
          </tr>
        </thead>
              <tbody>

              <?php $a=1; foreach ($data as $jur): ?>
                  <tr>
                    <td><?php echo $a++ ?></td>
                    <td><?php echo $jur->nama_jurusan ?></td>
                    <td><?php echo $jur->fakultas ?></td>
                    <td><?php echo $jur->akreditasi ?></td>
                    <td><?php echo $jur->jumlah ?></td>

                  </tr>

              <?php endforeach ?>

              </tbody>
          </table>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
