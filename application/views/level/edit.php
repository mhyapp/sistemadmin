<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Leveluser Edit</h3>
            </div>
			<?php echo form_open('admin/level/edit/'.$leveluser['idleveluser']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="namalevel" class="control-label"><span class="text-danger">*</span>Namalevel</label>
						<div class="form-group">
							<input type="text" name="namalevel" value="<?php echo ($this->input->post('namalevel') ? $this->input->post('namalevel') : $leveluser['namalevel']); ?>" class="form-control" id="namalevel" />
							<span class="text-danger"><?php echo form_error('namalevel');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>