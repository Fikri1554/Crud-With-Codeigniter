<div class="card">
	<div class="card-header">Edit Menu</div>
    <div class="card-body">
    	<font color="red"><?php echo validation_errors(); ?></font>
    	<form action="<?php echo site_url('UAS/UpdateDataMenu'); ?>" method="post">	
		<!-- Token CSRF -->
		<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
		<!-- Token CSRF -->

			<table class="table table-bordered">
				<tr>
					<td>Nama</td>
					<td><input type="hidden" name="kd_menu" value="<?php echo $detail['kd_menu']; ?>">
						<input type="text" name="name" value="<?php echo $detail['name']; ?>" class="form-control"></td>
				</tr>
				<tr>
					<td>Site url</td>
					<td>
						<input type="text" name="site_url" value="<?php echo $detail['site_url']; ?>" class="form-control">
						<input type="hidden" name="update_date" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("y-m-d H:i:s"); ?>"></td>
			        </td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="btn_simpan" value="Simpan" class="btn btn-primary"></td>
				</tr>
			</table>
		</form>
    </div>
</div>
