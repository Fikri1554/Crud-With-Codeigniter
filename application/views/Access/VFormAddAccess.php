<div class="card">
	<div class="card-header">Tambah Access</div>
    <div class="card-body">
    	<font color="red"><?php echo validation_errors(); ?></font>
    	<form action="<?php echo site_url('UAS/AddDataAccess'); ?>" method="post">
    			<!-- Token CSRF -->
		<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
		<!-- Token CSRF -->
			<table class="table table-bordered">
				<tr>
					<td>kode users</td>
					<td><input type="text" name="kd_users" class="form-control" required></td>
				</tr>
				<tr>
					<td>kode Menu</td>
					<td>
						<input type="text" name="kd_menu" class="form-control" required>
			        </td>
					<input type="hidden" name="insert_date" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("y-m-d H:i:s"); ?>">
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="simpan" value="Simpan" class="btn btn-primary"></td>
				</tr>
			</table>
		</form>
    </div>
</div>
