<div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">Transaksi Keluar</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Transaksi Keluar</a></li>
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
                                <div class="col-sm-6">
                                    <div class="card">
                                    <div class="card-body">
                                            <h5>Input Transaksi Keluar</h5>
                                            <button class="btn-sm btn-primary" data-toggle="modal" data-target="#modalcarinasabah">cari</button>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <!--  -->
                                                    
                                                    
                                                    <form action="<?php echo base_url('admin/nasabah/add') ?>" method="post"> 
                                                        <div class="form-group">
                                                            <label>Nama Nasabah</label> 
                                                            <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama_nasabah">
                                                            <span class="text-danger"><?php echo form_error('nama_nasabah');?></span>
                                                            <select id="pilihNasabah" class="form-control select2" name="idnsb">
                                                                <option value="0" selected="selected">--Piih Nasabah mu--</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Jaminan</label>
                                                            <input type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat">
                                                            <span class="text-danger"><?php echo form_error('alamat');?></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Notaris</label>
                                                            <select name="idnotaris" id="idnotaris" class="form-control form-control-line">
                                                                <option>Pilih Notaris</option>
                                                                <?php foreach ($notaris as $row) :?>
                                                                    <option value="<?php echo $row['idnotaris'];?>"><?php echo $row['nama_notaris'];?></option>
                                                                <?php endforeach;?>
                                                            </select>
                                                            <span class="text-danger"><?php echo form_error('notaris');?></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal</label>
                                                            <input type="date" class="form-control" placeholder="Masukkan Alamat" name="alamat">
                                                            <span class="text-danger"><?php echo form_error('alamat');?></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" name="keterangan" id="" cols="10" rows="5"></textarea>
                                                            
                                                            <span class="text-danger"><?php echo form_error('alamat');?></span>
                                                        </div>
                                                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                                        <a href="<?php echo base_url('admin/nasabah') ?>" class="btn btn-danger" title="Batal">Batal</a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                    <div class="card-body">
                                            <h5>Histori Transaksi Keluar</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <!--  -->
                                                    <p>Jaminan keluar ke notaris [ nama notaris ] <a href="#!" class="label theme-bg2 text-white f-12">Proses</a> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ Main Content ] end -->
                            <!-- Modal -->
                            <div class="modal fade" id="modalcarinasabah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel"> Cari Nasabah </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?php echo base_url().'admin/Notaris/Tambah_aksi'?>">
                                            <div class="form-group">
                                                <input type="text" name="nama" class="form-control" placeholder="masukkan nama nasabah">
                                            </div>
                                        <button type="reset" class="btn-sm btn-danger" data-dismiss="modal">Reset</button>
                                        <button type="submit" class="btn-sm btn-primary">Simpan</button>
                                        </form>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                            <!-- end Modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>