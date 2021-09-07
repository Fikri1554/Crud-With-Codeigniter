<div class="card">
	<div class="card-header">Edit Video</div>
    <div class="card-body">
    	<font color="red"><?php echo validation_errors(); ?></font>
    	<form action="<?php echo site_url('UAS/UpdateDataVideo'); ?>" method="post">
			

		<!-- Token CSRF -->
		<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
		<!-- Token CSRF -->

			<table class="table table-bordered">
				<tr>
					<td>Subject</td>
					<td><input type="hidden" name="kd_video" value="<?php echo $detail['kd_video']; ?>">
						<input type="text" name="subject" value="<?php echo $detail['subject']; ?>" class="form-control"></td>
				</tr>
				<tr>
					<td>Link</td>
					<td>
						<input type="text" name="link" value="<?php echo $detail['link']; ?>" class="form-control"></td>
			        </td>
				</tr>
				<tr>
					<td>content</td>
					<td><input type="text" name="content" value="<?php echo $detail['content']; ?>" class="form-control"></td>
				</tr>
				<tr>
					<td>publish</td>
					<td><input type="text" name="publish" value="<?php echo $detail['publish']; ?>" class="form-control">
					<input type="hidden" name="update_date" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("y-m-d h:i:s"); ?>" class="form-control"></td></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="btn_simpan" value="Simpan" class="btn btn-primary"></td>
				</tr>
			</table>
		</form>
    </div>
</div>
