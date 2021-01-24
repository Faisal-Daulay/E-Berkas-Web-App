
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Surat
            </div>
            <div class="col-md-3">
              <a href="?page=surat/form.php">
                <button type="submit" class="btn btn-primary" style="margin: 10px;">Tambah</button>
              </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nomor Surat</th>
                      <th>Agenda</th>
                      <th>Perihal</th>
                      <th>Nama Surat</th>
                      <th>Tanggal Surat</th>
                      <th>Sifat Surat</th>
                      <th>Kategori Surat</th>
                      <th>Tujuan</th>
                      <th>Penerima</th>
                      <th>Pengirim</th>
                      <th>Isi Surat</th>
                      <th>File</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                       $sql = mysqli_query($db,"SELECT * FROM data_surat d, kategori k, pegawai p WHERE d.id_cat =k.id_cat AND  d.id_pegawai =p.id_pegawai ");
                       $no=1;
                       while ($ambil = mysqli_fetch_array($sql)) {
                          $id = $ambil['id_surat'];
                          $no_surat = $ambil['no_surat'];
                          $agenda = $ambil['agenda'];
                          $perihal = $ambil['perihal'];
                          $nama = $ambil['nama'];
                          $tgl = $ambil['tgl'];
                          $sifat = $ambil['sifat'];
                          $tuju = $ambil['tuju'];
                          $pegawai = $ambil['nama_pegawai'];
                          $pengirim = $ambil['pengirim'];
                          $cat = $ambil['nama_cat'];
                          $isi = $ambil['isi'];
                          $file = $ambil['file'];
                    ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $no_surat; ?></td>
                        <td><?php echo $agenda; ?></td>
                        <td><?php echo $perihal; ?></td>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo $tgl; ?></td>
                        <td><?php echo $sifat; ?></td>
                        <td><?php echo $cat; ?></td>
                        <td><?php echo $tuju; ?></td>
                        <td><?php echo $pegawai; ?></td>
                        <td><?php echo $pengirim; ?></td>
                        <td><?php echo $isi; ?></td>
                        <td>
                          <a href="img/<?php echo $file; ?>" title="<?php echo $file; ?>">
                            <i class="fas fa-fw fa-file"></i>
                          </a>
                        </td>
                        <td>
                          <a href="?page=surat/form.php&id=<?php echo $id ?>" class="btn btn-warning">Edit</a>
                          <a href="?page=surat/proses.php&del=<?php echo $id ?>" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>