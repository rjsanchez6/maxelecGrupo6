<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>MAXELEC</title>  
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilo.css">
  <link rel="stylesheet" href="../css/dashboard.css">
  <link rel="icon" type="image/png" href="../images/logo_img.png" />
  </head>

  <body>
      <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.html"><img src="../images/logo_text.png" width="30"> MaxElec</a>
      <ul class="navbar-nav px-3">
          <li class="nav-item text-nowrap">
                <a class="nav-link" href="../login.html">Cerrar Sesión</a>
          </li>
      </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
          <nav class="col-md-2 d-none d-md-block bg-light sidebar">
              <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link active" href="index.html">
                          <span data-feather="home"></span>
                          Listado de reclamos <span class="sr-only">(current)</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="reclamosweb.html">
                          <span data-feather="file"></span>
                          Reclamos web
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="tecnicos.html">
                          <span data-feather="shopping-cart"></span>
                          Técnicos
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="manuales.html">
                          <span data-feather="file"></span>
                          Manuales
                      </a>
                    </li>
                </ul>

                
              </div>
          </nav>

          <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <br>     
          
          <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Ingrese el DNI del cliente</h4>
      <form class="needs-validation" novalidate method="POST">
        
		<input name="dni" type="text" class="form-control"  placeholder="DNI" required>
		
		<br>
		
        <div class="col-md-12 mb-3 text-center">
			<input type="submit" formaction="nuevallamada_datos.php" value="Agregar" name="input" class="btn btn-outline-secondary center-block">
        </div>
        </div>      
      </main>
    </div>
	<br><br><br><br><br><br><br><br><br><br><br><br>
<footer class="footer mt-auto py-3">
        <div class="container text-center">
          <span class="text-muted">Diseñado por RISE Software Inc. - © 2019</span>
       </div>
    </footer>
    </div>
    
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
