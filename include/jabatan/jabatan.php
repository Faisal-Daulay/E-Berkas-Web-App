
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Jabatan
            </div>
            <div class="col-md-3">
              <a href="?page=jabatan/form.php">
                <button type="submit" class="btn btn-primary" style="margin: 10px;">Tambah</button>
              </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Jabatan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                       $sql = mysqli_query($db,"SELECT * FROM jabatan ");
                       $no=1;
                       while ($ambil = mysqli_fetch_array($sql)) {
                          $id = $ambil['id_jabatan'];
                          $jabatan = $ambil['nama_jabatan'];
                    ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $jabatan; ?></td>
                        <td>
                          <a href="?page=jabatan/form.php&id=<?php echo $id ?>" class="btn btn-warning">Edit</a>
                          <a href="?page=jabatan/proses.php&del=<?php echo $id ?>" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>