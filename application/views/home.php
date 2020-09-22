<div class="container pt-3 pb-3">
	<div class="row">
		<div class="col-12 col-lg-12 ">
			<div class="p-4">
				<h1 class="mt-3"><b><?php echo $title;?></b></h1>
				Los documentos enumerados a continuación están obligados a solicitar en el instituto.

			</div>
		</div>
	</div>
</div>

<div class="container pt-3 pb-3">
	<div class="row">
		<div class="col-12 col-lg-12 ">
			<div class="p-4">
				<h4 class="mt-3 pb-3"><b>Plan Educativo</b> (Obligatorio)</h4>

				<div class="accordion" id="accordionExample">
					<div class="card">
						<div class="card-header bg-white" id="headingOne">
							<h2 class="mb-0">
								<div class="d-flex justify-content-between">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
										data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										Guia e Información sobre este archivo
									</button>
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
										data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										<i class="fas fa-plus"></i>
									</button>
								</div>
							</h2>

						</div>

						<div id="collapseOne" class="collapse" aria-labelledby="headingOne"
							data-parent="#accordionExample" style="height: 0px;" aria-expanded="false">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
								squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
								quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
								squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
								craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
								butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
								nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
				</div>

				<?php echo form_open_multipart('/home/do_upload');?>

				<div class="container mt-4" id="uploadform1">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group files pb-3">
								<input type="file" type="text/css" class="form-control" style="color: transparent;"
									name="userfileplan" >
							</div>
						</div>
					</div>
				</div>

				<div class="container mt-4 " id="filenamecontainer1">
						<div class="card border-left col-sm-11">
							<div class="card-body">
								<div class="row">
									<div class="col-sm-1">
										<i class="fas fa-check"></i>
									</div>
									<div class="col-sm-8" id="filename1">
										
									</div>
									<div class="col-sm-2">
										<button class="btn btn-link text-danger" id="delete1" type="button">Eliminar</button>
									</div>
								</div>
							</div>
						</div>
					</div>



			</div>
		</div>
	</div>
</div>

<div class="container pt-3 pb-3">
	<div class="row">
		<div class="col-12 col-lg-12 ">
			<div class="p-4 ">
				<h4 class="mt-3 pb-3"><b>Copia de Formulario Instituto</b> (Obligatorio)</h4>

				<div class="pt-3" id="accordion">
					<div class="card">
						<div class="card-header bg-white" id="headingTwo">
							<h2 class="mb-0">
								<div class="d-flex justify-content-between">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
										data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Guia e Información sobre este archivo
									</button>
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
										data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<i class="fas fa-plus"></i>
									</button>
								</div>
							</h2>

						</div>

						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
							data-parent="#accordionExample" style="height: 0px; " aria-expanded="false">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
								squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
								quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
								squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
								craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
								butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
								nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>

					<div class="container mt-4" id="uploadform2">
						<div class="row ">
							<div class="col-md-12">
								<div class="form-group files pb-3">
									<input type="file" type="text/css" class="form-control" style="color: transparent;"
										name="userfileform">
								</div>
							</div>
						</div>
					</div>

				</div>
					<div class="container mt-4 " id="filenamecontainer2">
						<div class="card border-left col-sm-11">
							<div class="card-body">
								<div class="row">
									<div class="col-sm-1">
										<i class="fas fa-check"></i>
									</div>
									<div class="col-sm-8" id="filename2">
										
									</div>
									<div class="col-sm-2">
										<button class="btn btn-link text-danger" id="delete2" type="button">Eliminar</button>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>

	<div class="container pt-3 pb-3">
		<div class="row">
			<div class="col-12 col-lg-12 ">
				<div>
					<?php echo $error;?>
				</div>
				<div class="p-4 d-flex justify-content-end">

					<input type="submit" value="Guardar" class="btn btn-warning text-white accelerator pl-3 pr-3" />

					</form>

				</div>
			</div>
		</div>
	</div>