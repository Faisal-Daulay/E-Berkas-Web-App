<?php 
  $id=$_REQUEST['id'];
  if (isset($id)) {
    $aksi = 'edit';
    $sql = mysqli_query($db, "SELECT * FROM pegawai WHERE id_pegawai='$id' ");
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
	  Form <?php echo $aksi; ?> Pegawai
	</div>
	<div class="card-body">
		<form action="?page=pegawai/proses.php" method="post">
			<input type="hidden" name="aksi" value="<?php echo $aksi; ?>">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">
			  <div class="form-row">
			    <div class="col-md-5">
			      <div class="form-label-group">
			        <input type="text" name="nama" id="firstName" class="form-control" placeholder="Nama" required="required" value="<?php echo $ambil['nama_pegawai']; ?>">
			        <label for="firstName">Nama</label>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="form-group">
			  <div class="form-row">
			    <div class="col-md-5">
			      <div class="form-label-group">
			        <input type="text" name="alamat" id="firstName1" class="form-control" placeholder="Alamat" required="required" value="<?php echo $ambil['alamat']; ?>">
			        <label for="firstName1">Alamat</label>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="form-group">
			  <div class="form-row">
			    <div class="col-md-5">
			      <label>Agama</label>
			      <div class="form-label-group">
			      	<select name="agama" class="form-control">
			      		<option value="islam">Islam</option>
			      		<option value="kristen">Kristen</option>
			      		<option value="katholik">Katholik</option>
			      		<option value="budha">Budha</option>
			      		<option value="hindu">Hindu</option>
			      	</select>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="form-group">
			  <div class="form-row">
			    <div class="col-md-5">
			      <label>Jenis Kelamin</label>
			      <div class="form-label-group">
			        <select name="jk" class="form-control">
			        	<option value="pria">Pria</option>
			        	<option value="wanita">Wanita</option>
			        </select>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="form-group">
			  <div class="form-row">
			    <div class="col-md-5">
			      <div class="form-label-group">
			        <input type="text" name="tlpn" id="firstName3" class="form-control" placeholder="Telepon / Hp" required="required" value="<?php echo $ambil['nama_pegawai']; ?>">
			        <label for="firstName3">Telepon / Hp</label>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="form-group">
			  <div class="form-row">
			    <div class="col-md-5">
			      <div class="form-label-group">
			        <input type="text" name="email" id="firstName4" class="form-control" placeholder="Email" required="required" value="<?php echo $ambil['nama_pegawai']; ?>">
			        <label for="firstName4">Email</label>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="form-group">
			  <div class="form-row">
			    <div class="col-md-5">
			      <label>Jabatan</label>
			      <div class="form-label-group">
			      	<select name="jabatan" class="form-control">
	                    <?php
	                       $sql1 = mysqli_query($db,"SELECT * FROM jabatan ");
	                       while ($ambil1 = mysqli_fetch_array($sql1)) {
	                          $id = $ambil1['id_jabatan'];
	                          $jabatan = $ambil1['nama_jabatan'];
	                    ?>
			      		<option value="<?php echo $id ?>"><?php echo $jabatan; ?></option>
			      		<?php } ?>
			      	</select>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="form-group">
			  <div class="form-row">
			    <div class="col-md-5">
			      <label>Status</label>
			      <div class="form-label-group">
			      	<select name="status" class="form-control">
			      		<option value="pns">PNS</option>
			      		<option value="npns">NON PNS</option>
			      	</select>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="box-footer">
				<input type="submit" name="tombol" class="btn btn-danger" value="Simpan">
        		<button type="reset" class="btn btn-primary"  onclick=self.history.back()>Kembali</button>
			</div>
		</form>
	</div>
</div>