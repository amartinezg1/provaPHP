	<?php include("_header.php"); ?>
    <!-- Page Content -->
<div class="container">
		<div class="row my-4">
		  <div class="col-md-6 offset-md-3">
			<div class="well well-sm">
			  <form action="" method="post">
			  <fieldset>
				<h2>Formulario de contacto</h2>
		
				<!-- Name input-->
				<div class="row mb-3">
				  <label class="col-md-3 control-label" for="name">Nombre</label>
				  <div class="col-md-9">
					<input id="name" name="name" type="text" placeholder="" class="form-control" required>
				  </div>
				</div>
		
				<!-- Email input-->
				<div class="row mb-3">
				  <label class="col-md-3 control-label" for="email">Email</label>
				  <div class="col-md-9">
					<input id="email" name="email" type="email" placeholder="" class="form-control" required>
				  </div>
				</div>
		
				<!-- Message body -->
				<div class="row mb-3">
				  <label class="col-md-3 control-label" for="message">Mensaje</label>
				  <div class="col-md-9">
					<textarea class="form-control" id="message" name="message" placeholder="" rows="5" required></textarea>
				  </div>
				</div>
		
				<!-- Form actions -->
				<div class="row mb-3">
				  <div class="col-md-12 text-right">
					<button type="submit" class="btn btn-primary" name="add_contact">Enviar</button>
				  </div>
				</div>
			  </fieldset>
			  </form>
			</div>
		  </div>
		</div>
	</div>
	<?php include("_footer.php"); ?>
