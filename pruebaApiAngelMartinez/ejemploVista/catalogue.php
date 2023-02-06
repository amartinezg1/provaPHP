<?php include("_header.php"); ?>

<script>
$(document).ready(function() {
     
    $('#booksCatalogue').DataTable( {
        responsive: true,
        "ajax": {
            "url": "http://127.0.0.1:8000/catalog/products",
            "dataSrc": ""
        },
         "columns": [
 
          { "data": "id" },
          { "data": "bookType" },
          { "data": "title" },
          { "data": "description" },
          { "data": "weight" },
          { "data": "enable" },
                    ],
          "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.12.0/i18n/es-ES.json"
            }
          });
        });

</script>
    <!-- Page Content -->
      <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <p class="lead my-4">Categorias de productos</p>
        <div class="list-group">
          <a href="catalogue.php" class="list-group-item">Todos los libros(Llamada API)</a>
        </div>
      </div>
<div class="container flex-shrink-0">
	<div class="row my-4">
	  <div class="col-md-6 offset-md-3">
          <h2>Catálogo</h2>
          <table id="booksCatalogue" name="booksCatalogue" class="display nowrap " style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Peso</th>
                <th>Disponible</th>
            </tr>
        </thead>
        <tbody>
            </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Peso</th>
                <th>Disponible</th>
            </tr>
        </tfoot>
    </table>
	  </div>
	</div>
</div>
	</div>
</div>
<?php include("_footer.php"); ?>