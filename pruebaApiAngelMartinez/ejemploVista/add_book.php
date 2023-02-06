<?php include("_header.php"); ?>

    <!-- Page Content -->
<div class="container flex-shrink-0">
	<div class="row my-4">
	  <div class="col-md-6 offset-md-3">
		  <form action="" method="post">
			<h2>Añadir libro</h2>
	
			<!-- Title input-->
			<div class="row mb-3">
			  <label class="col-md-3 control-label" for="title">Título</label>
			  <div class="col-md-9">
				<input id="name" name="title" type="text" placeholder="" class="form-control" required>
			  </div>
			</div>
	
			<!-- Type input-->
			<div class="row mb-3">
			  <label class="col-md-3 control-label" for="bookType">Tipo</label>
			  <div class="col-md-9">
				<input id="bookType" name="bookType" type="text" placeholder="" class="form-control" required>
			  </div>
			</div>
	
			<!-- Description input-->
			<div class="row mb-3 form-group">
			  <label class="col-md-3 control-label" for="description">Descripción</label>
			  <div class="col-md-9">
				  <textarea class="form-control" ></textarea>
			  </div>
			</div>

			<!-- Weight input-->
			<div class="row mb-3">
			  <label class="col-md-3 control-label" for="bookType">Peso</label>
			  <div class="col-md-9">
				<input id="weight" name="weight" type="number" placeholder=""  required>
			  </div>
			</div>

			<!-- Form actions -->
			<div class="row mb-3">
			  <div class="col-md-12 text-right">
				<button type="submit" name="" value="" class="btn btn-primary">Enviar</button>
			  </div>
			</div>
		  </form>
	  </div>
	</div>
</div>
<?php include("_footer.php"); ?>
