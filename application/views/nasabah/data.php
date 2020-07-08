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
                                        <li class="breadcrumb-item"><a href="javascript:">Nasabah</a></li>
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
                                        <div class="card-header">
                                            <h5>Data Nasabah</h5>
                                        </div>
                                        <div class="card-block">
                                        <a href="<?php echo base_url();?>admin/nasabah/add" class="btn-sm btn-success text-white"><i class="mdi mdi-account-multiple-plus"></i> Tambah Data</a>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>Alamat</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                            $no = 1;
                                                            foreach ($datanasabah as $array) {
                                                                
                                                        ?>
                                                        <tr>
                                                            <th scope="row"><?php $no++; ?></th>
                                                            <td><?php echo $array->nama_nasabah; ?></td>
                                                            <td><?php echo $array->alamat; ?></td>
                                                            <td>
                                                            <a href="<?= base_url('admin/nasabah/edit/'.$array->idnasabah.'') ?>" class="btn-sm btn-primary" title="Edit"><i class="fa fa-tags"></i></a>
                                                            <a href="#" class="btn-sm btn-danger" title="Edit"><i class="fa fa-trash"></i></a>
                                                                
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
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