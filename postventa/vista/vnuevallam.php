<?php include('C:\wamp64\www\maxelec\postventa\controlador\cnuevallam.php') ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <br>     
          
          <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Nuevo reclamo</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">DNI</label>
            <input name="dni" type="text" class="form-control" placeholder="" value="<?php foreach ($data as $dat):
        						echo $dat['dni'];
    						 endforeach; ?>" readonly="readonly">
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Nombre</label>
            <input name='nombre' type="text" class="form-control" placeholder="" value="<?php foreach ($data as $dat):
        						echo $dat['nombre'];
    						 endforeach; ?>" readonly="readonly">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Correo electrónico</label>
            <input name='correo' type="text" class="form-control" placeholder="" value="<?php foreach ($data as $dat):
        						echo $dat['correo'];
    						 endforeach; ?>" readonly="readonly">
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Teléfono</label>
            <input name='telefono' type="text" class="form-control" placeholder="" value="<?php foreach ($data as $dat):
        						echo $dat['telefono'];
    						 endforeach; ?>" readonly="readonly">
          </div>
        </div>
        <div class="mb-3">
          <label for="address">Dirección</label>
          <input name='direccion' type="text" class="form-control" id="address" placeholder="" value="<?php foreach ($data as $dat):
        						echo $dat['direccion'];
    						 endforeach; ?>" readonly="readonly">
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Provincia</label>
            <input name="provincia" type="text" class="form-control" placeholder="" value="<?php foreach ($data as $dat):
        						echo $dat['provincia'];
    						 endforeach; ?>" readonly="readonly">
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Nombre</label>
            <input name='ciudad' type="text" class="form-control" placeholder="" value="<?php foreach ($data as $dat):
        						echo $dat['ciudad'];
    						 endforeach; ?>" readonly="readonly">
          </div>
        </div>
        <br>
        <div class="row center-block">
        <div class="col-md-12 mb-3 text-center">
		<input type="button" onclick=" location.href='nuevallamada_add.php' " value="Confirmar" class="btn btn-outline-secondary center-block">
			<!-- <input type="submit" formaction="nuevallamada_add.php" value="Confirmar" name="input" class="btn btn-outline-secondary center-block"> -->
        </div>
        </div>      
      </main>