    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Cek Laporan</div>
        <div class="card-body">
          <form action="include/laporan/data_laporan.php" method="post">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="date" id="firstName" name="start" class="form-control" required="required">
                    <label for="firstName">Tanggal Start</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="date" id="lastName" name="end" class="form-control" required="required">
                    <label for="lastName">Tanggal End</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-left">
                <input type="submit" class="btn btn-danger" value="Lihat Laporan">
            </div>
          </form>
        </div>
      </div>
    </div>