<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->
          <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">
              <a href="<?php echo base_url() ?>Karyawan" class="btn btn-info btn-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg>
                                    </a>
              </h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <form action="<?php echo base_url(); ?>Karyawan/simpan" method="POST" >
                <div class="form-group">
                  <label>NIP</label>
                  <input name="nip" id="nip" value="<?php echo $nip; ?>" type="text" class="form-control" readonly/>
                </div>
                <div class="form-group">
                  <label>Nama Pegawai</label>
                  <input name="nama" id="nama" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input name="alm" id="alm" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>No KTP</label>
                  <input name="ktp" id="ktp" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="sex" id="sex" required>
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                  </select>
                 <!-- <input name="sex" id="sex" type="text" class="form-control"> -->
                </div>
                <div class="form-group">
                  <label>Kota</label>
                  <input name="kta" id="kta" type="text" class="form-control" required>
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan">
                <input type="reset" class="btn btn-danger" value="Ulang">
              </form> 
              </div>
            </div>
          </div>

        </div>