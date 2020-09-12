<div class="container">
	<div class="row">
		<div class="col-12 col-lg-6">
			<div class="p-4 border">
				<h1 class="mt-3">Home View</h1>

				<?php echo $error;?>

				<?php echo form_open_multipart('home/do_upload');?>

					<input type="file" name="userfile" size="20" />
					<br />
					<br />
					<input type="submit" value="upload" />

				</form>

			</div>
		</div>
	</div>
</div>
