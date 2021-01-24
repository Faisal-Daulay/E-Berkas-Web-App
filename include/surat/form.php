<?php 
  $id=$_REQUEST['id'];
  if (isset($id)) {
    $aksi = 'edit';
    $sql = mysqli_query($db, "SELECT * FROM data_surat d, kategori k WHERE d.id_cat =k.id_cat ");
    $ambil = mysqli_fetch_array($sql);
  } 
  else {
    $aksi = 'tambah';
  }
?>
<!-- DataTables Example -->
<div class="card mb-3">
	<div class="card-header text-capitalize">
	  <i class="fas fa-table"></i>
	  Form <?php echo $aksi; ?> Surat
	</div>
	<div class="card-body">
		<form action="?page=surat/proses.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="aksi" value="<?php echo $aksi; ?>">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">
			  <div class="form-row">
			    <div class="col-md-5">
			      <div class="form-label-group">
			        <input type="text" name="nosurat" id="firstName12" class="form-control" placeholder="Nama" required="required" value="<?php echo $ambil['no_surat']; ?>">
			        <label for="firstName12">Nomor Surat</label>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="form-group">
			  <div class="form-row">
			    <div class="col-md-5">
			      <div class="form-label-group">
			        <input type="text" name="agenda" id="firstName13" class="form-control" placeholder="Nama" required="required" value="<?php echo $ambil['agenda']; ?>">
			        <label for="firstName13">Nomor Agenda Surat</label>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="form-group">
			  <div class="form-row">
			    <div class="col-md-5">
			      <div class="form-label-group">
			        <input type="text" name="perihal" id="firstName14" class="form-control" placeholder="Nama" required="required" value="<?php echo $ambil['perihal']; ?>">
			        <label for="firstName14">Perihal Surat</label>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="form-group">
			  <div class="form-row">
			    <div class="col-md-5">
			      <div class="form-label-group">
			        <input type="text" name="nama" id="firstName" class="form-control" placeholder="Nama" required="required" value="<?php echo $ambil['nama']; ?>">
			        <label for="firstName">Nama Surat</label>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="form-group">
			  <div class="form-row">
			    <div class="col-md-5">
			      <div class="form-label-group">
			        <input type="text" name="sifat" id="firstName15" class="form-control" placeholder="Nama" required="required" value="<?php echo $ambil['sifat']; ?>">
			        <label for="firstName15">Sifat Surat</label>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="form-group">
			  <div class="form-row">
			    <div class="col-md-5">
			      <div class="form-label-group">
			        <input type="date" name="tgl" id="firstName1" class="form-control" required="required" value="<?php echo $ambil['tgl']; ?>">
			        <label for="firstName1">Tanggal Surat</label>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="form-group">
			  <div class="form-row">
			    <div class="col-md-5">
			      <div class="form-label-group">
			        <input type="text" name="tuju" id="firstName16" class="form-control" placeholder="Nama" required="required" value="<?php echo $ambil['tuju']; ?>">
			        <label for="firstName16">Di Tuju</label>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="form-group">
			  <div class="form-row">
			    <div class="col-md-5">
			      <label>Kategori</label>
			      <div class="form-label-group">
			      	<select name="kategori" class="form-control">
								<?php
										$sql2 = mysqli_query($db,"SELECT * FROM kategori ");
										while ($ambil2 = mysqli_fetch_array($sql2)) {
											$id_cat = $ambil2['id_cat'];
											$kate = $ambil2['nama_cat'];
								?>
			      		<option value="<?php echo $id_cat ?>"><?php echo $kate; ?></option>
			      		<?php } ?>
			      	</select>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="form-group">
			  <div class="form-row">
			    <div class="col-md-5">
			      <div class="form-label-group">
			        <input type="text" name="pengirim" id="firstName17" class="form-control" placeholder="Nama" required="required" value="<?php echo $ambil['penerima']; ?>">
			        <label for="firstName17">Pengirim</label>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="form-group">
			  <div class="form-row">
			    <div class="col-md-5">
			      <label>Penerima</label>
			      <div class="form-label-group">
			      	<select name="penerima" class="form-control">
	                    <?php
	                       $sql3 = mysqli_query($db,"SELECT * FROM pegawai ");
	                       while ($ambil3 = mysqli_fetch_array($sql3)) {
	                          $id_peg = $ambil3['id_pegawai'];
	                          $pegawai = $ambil3['nama_pegawai'];
	                    ?>
			      		<option value="<?php echo $id_peg ?>"><?php echo $pegawai; ?></option>
			      		<?php } ?>
			      	</select>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="form-group">
			  <div class="form-row">
			    <div class="col-md-5">
			      <label for="firstName3">Isi Surat</label>
			      <div class="form-label-group">
			        <!-- <input type="text" name="tlpn" id="firstName3" class="form-control" placeholder="Telepon / Hp" required="required" value="<?php echo $ambil['desk']; ?>"> -->
			        <textarea name="isi" id="firstName3" class="form-control"></textarea>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="form-group">
			  <div class="form-row">
			    <div class="col-md-5">
			      <label for="firstName4">Upload File</label>
			      <div class="form-label-group">
			        <input type="file" name="upload" id="firstName4" required="required" value="<?php echo $ambil['nama_pegawai']; ?>">
			      </div>
			    </div>
			  </div>
				<div class="box-footer">
					<input type="submit" name="tombol" class="btn btn-danger" value="Simpan">
	        <button type="reset" class="btn btn-primary"  onclick=self.history.back()>Kembali</button>
				</div>
			</div>
		</form>
	</div>
</div>