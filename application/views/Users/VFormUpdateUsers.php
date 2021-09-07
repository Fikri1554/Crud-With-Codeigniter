<div class="card">
	<div class="card-header">Edit Pembelian</div>
    <div class="card-body">
    	<font color="red"><?php echo validation_errors(); ?></font>
    	<form action="<?php echo site_url('UAS/UpdateDataUsers'); ?>" method="post">
			

		<!-- Token CSRF -->
		<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
		<!-- Token CSRF -->

			<table class="table table-bordered">
				<tr>
					<td>Nama</td>
					<td><input type="hidden" name="kd_users" value="<?php echo $detail['kd_users']; ?>">
						<input type="text" name="name" value="<?php echo $detail['name']; ?>" class="form-control"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>
						<input type="text" name="email" value="<?php echo $detail['email']; ?>" class="form-control"></td>
			        </td>
				</tr>
				<tr>
					<td>username</td>
					<td><input type="text" name="username" value="<?php echo $detail['username']; ?>" class="form-control"></td>
				</tr>
				<tr>
					<td>password</td>
					<td><input type="text" name="password" value="<?php echo $detail['password']; ?>" class="form-control"></td>
				</tr>
				<tr>
					<td>Level</td>
					<td><input type="text" name="level" value="<?php echo $detail['level']; ?>" class="form-control">
						<input type="hidden" name="update_date" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("y-m-d h:i:s"); ?>" class="form-control"></td>
				</tr>
			
				<tr>
					<td></td>
					<td><input type="submit" name="btn_simpan" value="Simpan" class="btn btn-primary"></td>
				</tr>
			</table>
		</form>
    </div>
</div>
