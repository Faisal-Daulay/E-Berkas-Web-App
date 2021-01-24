
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data User
            </div>
            <div class="col-md-3">
              <a href="?page=user/form.php">
                <button type="submit" class="btn btn-primary" style="margin: 10px;">Tambah</button>
              </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                       include 'koneksi.php';
                       $sql = mysqli_query($db,"SELECT * FROM user  ");
                       $no=1;
                       while ($ambil = mysqli_fetch_array($sql)) {
                          $id = $ambil['id_user'];
                          $user = $ambil['username'];
                          $pass = $ambil['password'];
                          $status = $ambil['status'];
                    ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $user; ?></td>
                        <td><?php echo $pass; ?></td>
                        <td>
                          <a href="?page=user/form.php&id=<?php echo $id ?>" class="btn btn-warning">Edit</a>
                          <a href="?page=user/proses.php&del=<?php echo $id ?>" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>