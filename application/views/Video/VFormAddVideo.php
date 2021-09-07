<div class="card">
	<div class="card-header">Tambah Video</div>
    <div class="card-body">
    	<font color="red"><?php echo validation_errors(); ?></font>
    	<form action="<?php echo site_url('UAS/AddDataVideo'); ?>" method="post">
    			<!-- Token CSRF -->
		<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
		<!-- Token CSRF -->
			<table class="table table-bordered">
				<tr>
					<td>subject</td>
					<td><input type="text" name="subject" class="form-control" required></td>
				</tr>
				<tr>
					<td>link</td>
					<td>
						<input type="text" name="link" class="form-control" required>
			        </td>
				</tr>
				<tr>
					<td>content</td>
					<td><input type="text" name="content" class="form-control" required></td>
				</tr>
				<tr>
					<td>publish</td>
	
					<td><select class="form-control" name="publish">
				           <option value="0">0</option>
				           <option value="1">1</option>
			            </select>
<input type="hidden" name="insert_date" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("y-m-d h:i:s"); ?>">
			        </td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="simpan" value="Simpan" class="btn btn-primary"></td>
				</tr>
			</table>
		</form>
    </div>
</div>
