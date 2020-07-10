<!-- <div class="pull-right">
	<a href="<?php echo site_url('user/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Iduser</th>
		<th>Password</th>
		<th>Username</th>
		<th>Idleveluser</th>
		<th>Actions</th>
    </tr>
	<?php foreach($user as $u){ ?>
    <tr>
		<td><?php echo $u['iduser']; ?></td>
		<td><?php echo $u['password']; ?></td>
		<td><?php echo $u['username']; ?></td>
		<td><?php echo $u['idleveluser']; ?></td>
		<td>
            <a href="<?php echo site_url('user/edit/'.$u['iduser']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('user/remove/'.$u['iduser']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table> -->
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
                                        <h5 class="m-b-10">User</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">User Akun</a></li>
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
                                            <h5>Data Akun</h5>
                                        </div>
                                        <div class="card-block">
                                        <a href="<?php echo base_url();?>admin/user/add" class="btn-sm btn-success text-white"><i class="mdi mdi-account-multiple-plus"></i> Tambah Data</a>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table id="tabelnsb" class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>Level</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                            $no = 1;
                                                            foreach ($user as $u) {
                                                                
                                                        ?>
                                                        <tr>
                                                            <th scope="row"><?php $no++; ?></th>
                                                            <td><?php echo $u['username']; ?></td>
                                                            <td><?php echo $u['idleveluser']; ?></td>
                                                            <td>
                                                            <a href="#" class="btn-sm btn-primary" title="Edit"><i class="fa fa-tags"></i></a>
                                                            <a href="#" class="btn-sm btn-danger" title="Hapus"><i class="fa fa-trash"></i></a>
                                                                
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
