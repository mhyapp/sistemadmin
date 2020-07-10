<!-- <?php echo form_open('user/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="password" class="col-md-4 control-label"><span class="text-danger">*</span>Password</label>
		<div class="col-md-8">
			<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
			<span class="text-danger"><?php echo form_error('password');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="username" class="col-md-4 control-label"><span class="text-danger">*</span>Username</label>
		<div class="col-md-8">
			<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
			<span class="text-danger"><?php echo form_error('username');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="idleveluser" class="col-md-4 control-label">Idleveluser</label>
		<div class="col-md-8">
			<input type="text" name="idleveluser" value="<?php echo $this->input->post('idleveluser'); ?>" class="form-control" id="idleveluser" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

 -->
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
                                        <li class="breadcrumb-item"><a href="javascript:">Tambah User</a></li>
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
                                            <h5>Tambah Data User</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <form action="<?php echo base_url('admin/user/add') ?>"> 
                                                        <div class="form-group">
                                                            <label>Username</label>
                                                            <input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
			                                                <span class="text-danger"><?php echo form_error('username');?></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="idleveluser" />
                                                            <span class="text-danger"><?php echo form_error('password');?></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Level</label>
                                                            <select name="idleveluser" id="idleveluser" class="form-control form-control-line">
                                                                <option>Pilih</option>
                                                                <?php foreach ($level as $row) :?>
                                                                    <option value="<?php echo $row['idleveluser'];?>"><?php echo $row['namalevel'];?></option>
                                                                <?php endforeach;?>
                                                            </select>
                                                        </div>
                                                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                                        <a href="<?php echo base_url('admin/user') ?>" class="btn btn-danger" title="Batal">Batal</a>
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