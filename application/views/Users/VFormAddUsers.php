<div class="card">
	<div class="card-header">Tambah Pembelian</div>
    <div class="card-body">
    	<font color="red"><?php echo validation_errors(); ?></font>
    	<form action="<?php echo site_url('UAS/AddDataUsers'); ?>" method="post">
    			<!-- Token CSRF -->
		<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
		<!-- Token CSRF -->
			<table class="table table-bordered">
				<tr>
					<td>Nama</td>
					<td><input type="text" name="name" class="form-control" required></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>
						<input type="text" name="email" class="form-control" required>
			        </td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" class="form-control" required></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="password" class="form-control" required></td>
				</tr>
				<tr>
					<td>Level</td>
					<td><select class="form-control" name="level">
				           <option value="1">1</option>
				           <option value="2">2</option>
			            </select></td>



					<input type="hidden" name="insert_date" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("y-m-d h:i:s"); ?>">
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="simpan" value="Simpan" class="btn btn-primary"></td>
				</tr>
			</table>
		</form>
    </div>
</div>
