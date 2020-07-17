    <section class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">Daftar Data Jaminan</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="#!">Tables</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Basic Tables</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!-- [ basic-table ] start -->
                                <div class="col-xl-12">
                                    <div class="card">
                                     <div class="card-header">
                                            <h5>Data Jaminan</h5>
                                            <span class="d-block m-t-5"><code></code></span>
                                             <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"></i>Tambah</button> 
                                        </div>
                                        <div class="card-block table-border-style">
                                        <div class="navbar-form navbar-right">
                                           <?php echo form_open('Jenis_jaminan/search')?>
                                             <input type="text" name="keyword" class="form-control" placeholder="Search">
                                             <button type="submit" class="btn btn-success">Cari</button>
                                           <?php echo form_close()?>
                                        </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Jaminan</th>
                                                            <th>Jenis Jaminan</th>
                                                            <th>Nasabah</th>
                                                            <th>No Kontrak</th>
                                                            <th>Jenis Pengikatan</th>
                                                            <th>Tanggal Masuk</th>
                                                            <th>Tanggal Keluar</th>
                                                            <th>Agunan</th>
                                                            <th>Realisasi</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>   
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ basic-table ] end -->
  </section>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel"> Tambah Data Jaminan </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
             <div class="form-group">
                <label> Jaminan </label>
                <input type="text" name="nama" class="form-control">
             </div>
              <div class="form-group">
                <label>Pilih Jenis Jaminan</label>
                <select name="jenis_jaminan" class="form-control" placeholder="Pilih Jenis Jaminan" required/>
                <option value="">-- Pilih Jenis Jaminan--</option>
                </select>   
             </div>
              <div class="form-group">
                <label>Pilih Nasabah</label>
                <select name="nasabah" class="form-control" placeholder="Pilih Nasabah" required/>
                <option value="">-- Pilih Nasabah--</option>
                </select>   
              </div>
              <div class="form-group">
                <label> No Kontrak </label>
                <input type="text" name="nama" class="form-control">
              </div>
              <div class="form-group">
                <label>Jenis Pengikatan</label>
                <select name="jenis_pengikatan" class="form-control" placeholder="Jenis Pengikatan" required/>
                <option value="">-- Pilih Jenis Pengikatan --</option>
                <option value="APHT">APHT</option>
                <option value="SKMHT">SKMHT</option>
                <option value="FEO">FEO</option>
                <option value="Legalisasi">Legalisasi</option>
                </select>
              <div class="form-group">
                <label> Tanggal Masuk </label>
                <input type="date" name="tgl" class="form-control" required>
              </div>
              <div class="form-group">
                <label> Tanggal Keluar </label>
                <input type="date" name="tgl" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Agunan</label>
                <select name="agunan" class="form-control" placeholder="Agunan" required/>
                <option value="">-- Pilih Agunan --</option>
                <option value="BPKB">BPKB</option>
                <option value="SHM">SHM</option>
                <option value="Dep/Tab">Dep/Tab</option>
                </select>
              <div class="form-group">
                <label> Realisasi </label>
                <input type="text" name="nama" class="form-control">
              </div>
            </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
      </div>    
    </div>
  </div>
</div>			