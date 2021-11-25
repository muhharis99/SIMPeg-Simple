<script>
  function select_data($nip,$nama,$alm,$ktp,$sex,$kta) {
    $("#nip").val($nip);
    $("#nama").val($nama);
    $("#alm").val($alm);
    $("#ktp").val($ktp);
    $("#sex").val($sex);
    $("#kta").val($kta);
  }
</script>
             <?php 
                $info = $this->session->flashdata('info');
                if(!empty($info))
                {
                  echo $info;
                }
            ?>
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="<?php echo base_url()?>Karyawan/tambah" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                        </svg>
                                        </span>
                                        <span class="text">Tambah Data Pegawai</span>
                                    </a>
                            <!--  -->
                            <a target="__blank" href="<?php echo base_url(); ?>Laporan/cetak_all" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                                        <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                                        <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                                      </svg>
                                        </span>
                                        <span class="text">Print All Data</span>
                                    </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <!-- <th>No</th> -->
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <!-- <th>NIK</th> -->
                                            <th>Action</th>
                                            <th>Print</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 
                                            $no = 1;
                                            foreach ($data->result() as $row) {
                                        ?>
                                        <tr>
                                            <!-- <td><?php echo $no++; ?></td> -->
                                            <td><?php echo $row->nip; ?></td>
                                            <td><?php echo $row->nama; ?></td>
                                            <td><?php echo $row->alm; ?></td>
                                            <!-- <td><?php echo $row->ktp; ?></td> -->
                                            <td>
                                            <a href="<?php echo base_url(); ?>Karyawan/ubah/<?php echo $row->nip; ?>" class="btn btn-info btn-circle" title="Ubah">
                                            <!-- icon -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                            <!-- end -->
                                            </a>
                                            
                                            <a data-toggle="modal" href="#myModal" class="btn btn-warning btn-circle" title="Cek Data" onclick="select_data(
                                            '<?= $row->nip ?>',
                                            '<?= $row->nama ?>',
                                            '<?= $row->alm ?>',
                                            '<?= $row->ktp ?>',
                                            '<?= $row->sex ?>',
                                            '<?= $row->kta ?>'
                                            )">
                                            <!-- icon -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                            </svg>
                                            <!-- end -->
                                            </a>

                                            <a href="<?php echo base_url(); ?>Karyawan/hapus/<?php echo $row->nip; ?>" class="btn btn-danger btn-circle" title="Hapus" onclick="return confirm('Anda yakin ingin menghapus data Pegawai atas nama <?php echo $row->nama; ?> ?')">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            <td>
                                              

                                            <a target="__blank" href="<?php echo base_url(); ?>Laporan/cetak_id/<?php echo $row->nip; ?>" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                                        <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                                        <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                                      </svg>
                                        </span>
                                        <span class="text">Print ID Card</span>
                                    </a>
                                          </td>
                                            
                                            </td>
                                            </tr>
                                        <?php 
                                             }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<!-- modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Data Pegawai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">NIP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nip" name="nip" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama" name="nama" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="alm" name="alm" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">No KTP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="ktp" name="ktp" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jk</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="sex" name="sex" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Kota</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="kta" name="kta" readonly>
            </div>
          </div>
        </form>
      </div><!-- 
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Tutup</button>
      </div> -->
    </div>
  </div>
</div>