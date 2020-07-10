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
                                        <h5 class="m-b-10">Nasabah</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Tambah Nasabah</a></li>
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
                                <div class="col-sm-12">
                                    <div class="card">
                                    <div class="card-body">
                                            <h5>Tambah Data Nasabah</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <!-- <?php echo form_open('user/edit/'.$user['iduser'],array("class"=>"form-horizontal")); ?> -->
                                                    <form  action="<?php echo base_url('admin/nasabah/edit/'.$nasabah['idnasabah']); ?>" method="post"> 
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama_nasabah" value="<?php echo $nasabah['nama_nasabah'];?>">
                                                            <span class="text-danger"><?php echo form_error('nama_nasabah');?></span>
                                                            <input type="hidden" name="idnasabah" value="<?php echo $nasabah['idnasabah']; ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <input type="text" class="form-control" placeholder="Masukkan Alamat" value="<?php echo $nasabah['alamat'];?>" name="alamat">
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
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>