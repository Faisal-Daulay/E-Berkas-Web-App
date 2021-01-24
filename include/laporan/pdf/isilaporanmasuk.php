<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Laporan</title>
    <style>
      body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Ubuntu', 'Helvetica Neue', sans-serif;
      }

      .tombol {
        padding: 10px;
        background: green;
        border-radius: 3px;
        color: white;
        text-decoration: none;
        margin: 20px 10px 10px 10px;
        border: none;
        cursor: pointer;
      }

      .tombol:hover {
        background: skyblue;
        color: black;
      }

      table tr td, table tr th {
        padding: 15px;
      }
    </style>
  </head>
  <body>
    <!-- DataTables Example -->
    <?php 
      $start = $_REQUEST['tgl1'];
      $end = $_REQUEST['tgl2'];
    ?>
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        <h1 align="center">DATA LAPORAN <br/>Per Tanggal : <?php echo $start; ?> Sampai Tanggal : <?php echo $end; ?> </h1>
      </div>
      <div class="col-md-3">
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table border="1" class="table table-bordered" id="dataTable" cellspacing="0">
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
              </tr>
            </thead>
            <tbody>
              <?php
                include '../../../koneksi.php';
                  $start = $_REQUEST['tgl1'];
                  $end = $_REQUEST['tgl2'];
                  $sql = mysqli_query($db,"SELECT * FROM data_surat d, kategori k, pegawai p WHERE d.id_cat =k.id_cat AND d.id_pegawai =p.id_pegawai AND tgl BETWEEN '$start' AND '$end' ");
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
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>