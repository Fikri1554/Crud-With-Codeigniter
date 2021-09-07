<div class="card">
	<div class="card-header">Edit Acess</div>
    <div class="card-body">
    	<font color="red"><?php echo validation_errors(); ?></font>
    	<form action="<?php echo site_url('UAS/UpdateDataAccess'); ?>" method="post">	
		<!-- Token CSRF -->
		<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
		<!-- Token CSRF -->

			<table class="table table-bordered">
				<tr>
					<td>Kode users</td>
					<td><input type="hidden" name="kd_access" value="<?php echo $detail['kd_access']; ?>">
						<input type="text" name="kd_users" value="<?php echo $detail['kd_users']; ?>" class="form-control"></td>
				</tr>
				<tr>
					<td>Kode Menu</td>
					<td>
						<input type="text" name="kd_menu" value="<?php echo $detail['kd_menu']; ?>" class="form-control">
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
