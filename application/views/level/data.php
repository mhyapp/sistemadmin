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
                                        <h5 class="m-b-10">Level User</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Level User</a></li>
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
                                            <h5>Data Level User</h5>
                                        </div>
                                        <div class="card-block">
                                        <a href="<?php echo base_url();?>admin/nasabah/add" class="btn-sm btn-success text-white"><i class="mdi mdi-account-multiple-plus"></i> Tambah Data</a>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table id="tabelnsb" class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Level</th>
                                                            
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach($leveluser as $l){ ?>
                                                    <tr>
                                                        <td><?php echo $l['idleveluser']; ?></td>
                                                        <td><?php echo $l['namalevel']; ?></td>
                                                        <td>
                                                            <a href="#" class="btn-sm btn-primary" title="Edit"><i class="fa fa-tags"></i></a>
                                                            <a href="#" class="btn-sm btn-danger" title="Hapus"><i class="fa fa-trash"></i></a>
                                                            <!-- <a href="<?php echo base_url('admin/level/edit/'.$l['idleveluser']); ?>" class="btn btn-info btn-sm"><span class="fa fa-pencil"></span> Edit</a>  -->
                                                            <!-- <a href="<?php echo site_url('level/remove/'.$l['idleveluser']); ?>" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a> -->
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