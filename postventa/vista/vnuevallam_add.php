
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <br>     
          
		  <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Nuevo reclamo</h4>  
      <form class="needs-validation" novalidate method="POST">
       
			
          <div class="row">
          <div class="col-md-4 mb-3">
            <label for="country">Producto</label>
            <select class="custom-select d-block w-100" name="producto" required>
                            <option value="Termotanque">Termotanque</option>
                            <option value="Anafe">Anafe</option>
                        </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Tipo</label>
            <select class="custom-select d-block w-100" name="tipo_prod" required>
                            <option value="Electrico">Eléctrico</option>
                            <option value="A gas">A gas</option>
                        </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Modelo</label>
            <input type="text" name="modelo_prod" class="form-control" placeholder="" value="" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Comercio donde se adquirió</label>
            <input type="text" name="comercio" class="form-control" placeholder="" value="" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Fecha de compra</label>
            <input type="date" name="fecha_compra" class="form-control" placeholder="" value="" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="firstName">Descripción del problema</label>
            <textarea name="descrip" class="form-control"></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 mb-3">
            <label for="firstName">Derivada en</label>
          </div>
          <div class="col-md-3 mb-3">
            <select class="custom-select d-block w-100" name="estado" required>
                            <option value="Reclamo">Reclamo</option>
                            <option value="Solucion">Solución</option>
                        </select>
          </div>
        </div>
        <div class="row center-block">
        <div class="col-md-12 mb-3 text-center">
			<input type="submit" formaction="exito.php" value="Agregar" class="btn btn-outline-secondary center-block"> 
        </div>
        </div>  
		</form>
      </main>