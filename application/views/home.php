<div class="container pt-3 pb-3">
	<div class="row">
		<div class="col-12 col-lg-12 ">
			<div class="p-4 border">
				<h1 class="mt-3"><?php echo $title;?></h1>

				

				<?php echo form_open_multipart('/home/do_upload');?>

					<div class="file-field pt-5">
							<input type="file" name="userfile" multiple size="20">
					</div>

					<br />
					<div>
						<?php echo $error;?>
						
						<?php if(empty($error)){ 
							echo "<br /><br />";
						} ?>
						
					</div>
					<br />
					<input type="submit" value="Upload" class="btn btn-primary"/>

				</form>

			</div>
		</div>
	</div>
</div>
