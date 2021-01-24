
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Pegawai
            </div>
            <div class="col-md-3">
              <a href="?page=pegawai/form.php">
                <button type="submit" class="btn btn-primary" style="margin: 10px;">Tambah</button>
              </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Jabatan</th>
                      <th>Agama</th>
                      <th>Jenis Kelamin</th>
                      <th>Telepon / Hp</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                       $sql = mysqli_query($db,"SELECT * FROM pegawai INNER JOIN jabatan ON jabatan.id_jabatan=pegawai.id_jabatan ");
                       $no=1;
                       while ($ambil = mysqli_fetch_array($sql)) {
                          $id = $ambil['id_pegawai'];
                          $nama = $ambil['nama_pegawai'];
                          $alamat = $ambil['alamat'];
                          $agama = $ambil['agama'];
                          $jk = $ambil['jk'];
                          $tlpn = $ambil['telpn'];
                          $email = $ambil['email'];
                          $jabatan = $ambil['nama_jabatan'];
                    ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo $alamat; ?></td>
                        <td><?php echo $jabatan; ?></td>
                        <td><?php echo $agama; ?></td>
                        <td><?php echo $jk; ?></td>
                        <td><?php echo $tlpn; ?></td>
                        <td><?php echo $email; ?></td>
                        <td>
                          <a href="?page=pegawai/form.php&id=<?php echo $id ?>" class="btn btn-warning">Edit</a>
                          <a href="?page=pegawai/proses.php&del=<?php echo $id ?>" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>