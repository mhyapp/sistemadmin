<?php echo form_open('user/edit/'.$user['iduser'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="password" class="col-md-4 control-label"><span class="text-danger">*</span>Password</label>
		<div class="col-md-8">
			<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $user['password']); ?>" class="form-control" id="password" />
			<span class="text-danger"><?php echo form_error('password');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="username" class="col-md-4 control-label"><span class="text-danger">*</span>Username</label>
		<div class="col-md-8">
			<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $user['username']); ?>" class="form-control" id="username" />
			<span class="text-danger"><?php echo form_error('username');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="idleveluser" class="col-md-4 control-label">Idleveluser</label>
		<div class="col-md-8">
			<input type="text" name="idleveluser" value="<?php echo ($this->input->post('idleveluser') ? $this->input->post('idleveluser') : $user['idleveluser']); ?>" class="form-control" id="idleveluser" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>