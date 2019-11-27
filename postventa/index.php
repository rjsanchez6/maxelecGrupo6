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
          <div class="row">
              <h2>Listado de reclamos </h2>
              <div class="col-md-2 mb-1">
                <a class="btn btn-outline-secondary" href="nuevallamada.html">Nuevo reclamo</a>
                </div>
              </div>
        <div class="row">
                <div class="col-md-2 ">
                  <label class=" col-form-label"><p class="lead font-weight-normal">Periodo del mes:</p></label>
                </div>
          <div class="col-md-2 mb-2">
            
            <select class="custom-select d-block w-100" id="mes" required>
              <option>Elegir...</option>
              <option>Enero</option>
              <option>Febrero</option>
              <option>Marzo</option>
              <option>Abril</option>
              <option>Mayo</option>
              <option>Junio</option>
              <option>Julio</option>
              <option>Agosto</option>
              <option>Septiembre</option>
              <option>Octubre</option>
              <option>Noviembre</option>
              <option>Diciembre</option>
            </select>
          </div>
          <div class="col-md-1.5 ">
                  <label class=" col-form-label"><p class="lead font-weight-normal">de:</p></label>
                </div>
          <div class="col-md-2 mb-2">
            
            <input class="form-control" type="number" min="2004" max="2019" value="2019">
          </div>
          <div class="col-md-1 mb-1">
          <a class="btn btn-outline-secondary" href="#.html">Aplicar</a>
        </div>
      </div>
      <div class="row">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <div class="col-md-1.5 mb-2">
                        <label class="col-sm-1.5 col-form-label"><p class="lead font-weight-normal">Ordenar por:</p></label>
                      </div>
                      <div class="col-md-2 mb-3">
                        <select class="custom-select d-block w-100" id="orden" required>
                            <option>Fecha</option>
                            <option>Cliente</option>
                            <option>Producto</option>
                            <option>Estado</option>
                        </select>
                      </div>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <div class="col-md-4 mb-1">
                <form class="form-inline my-8 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar cliente" aria-label="Search">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
                </form>

              </div>
                
        </div>
              <div class="table-responsive" >
                <table class="table table-striped table-sm table-bordered text-center">
                    <thead class="thead-dark">
                      <tr class="d-flex">
                          <th class="col-1">Código</th>
                          <th class="col-2">Fecha</th>
                          <th class="col-3">Cliente</th>
                          <th class="col-2">Producto</th>
                          <th class="col-2">Modelo</th>
                          <th class="col-2">Estado</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="d-flex">
                          <td class="col-1"><a href="detallellamada.html">235678F</a></td>
                          <td class="col-2">18/06/2019</td>
                          <td class="col-3">Juan Alfonso Rojas</td>
                          <td class="col-2">Anafe</td>
                          <td class="col-2">TGNC050RH</td>
                          <td class="col-2">Cerrado</td>
                      </tr>
                       <tr class="d-flex">
                          <td class="col-1"><a href="detallellamada.html">235678F</a></td>
                          <td class="col-2">18/06/2019</td>
                          <td class="col-3">Juan Alfonso Rojas</td>
                          <td class="col-2">Anafe</td>
                          <td class="col-2">TGNC050RH</td>
                          <td class="col-2">Cerrado</td>
                      </tr>
                       <tr class="d-flex">
                          <td class="col-1"><a href="detallellamada.html">235678F</a></td>
                          <td class="col-2">18/06/2019</td>
                          <td class="col-3">Juan Alfonso Rojas</td>
                          <td class="col-2">Anafe</td>
                          <td class="col-2">TGNC050RH</td>
                          <td class="col-2">Cerrado</td>
                      </tr>
                       <tr class="d-flex">
                          <td class="col-1"><a href="detallellamada.html">235678F</a></td>
                          <td class="col-2">18/06/2019</td>
                          <td class="col-3">Juan Alfonso Rojas</td>
                          <td class="col-2">Anafe</td>
                          <td class="col-2">TGNC050RH</td>
                          <td class="col-2">Cerrado</td>
                      </tr>
                       <tr class="d-flex">
                          <td class="col-1"><a href="detallellamada.html">235678F</a></td>
                          <td class="col-2">18/06/2019</td>
                          <td class="col-3">Juan Alfonso Rojas</td>
                          <td class="col-2">Anafe</td>
                          <td class="col-2">TGNC050RH</td>
                          <td class="col-2">Cerrado</td>
                      </tr>
                       <tr class="d-flex">
                          <td class="col-1"><a href="detallellamada.html">235678F</a></td>
                          <td class="col-2">18/06/2019</td>
                          <td class="col-3">Juan Alfonso Rojas</td>
                          <td class="col-2">Anafe</td>
                          <td class="col-2">TGNC050RH</td>
                          <td class="col-2">Cerrado</td>
                      </tr>
                       <tr class="d-flex">
                          <td class="col-1"><a href="detallellamada.html">235678F</a></td>
                          <td class="col-2">18/06/2019</td>
                          <td class="col-3">Juan Alfonso Rojas</td>
                          <td class="col-2">Anafe</td>
                          <td class="col-2">TGNC050RH</td>
                          <td class="col-2">Cerrado</td>
                      </tr>
                       <tr class="d-flex">
                          <td class="col-1"><a href="detallellamada.html">235678F</a></td>
                          <td class="col-2">18/06/2019</td>
                          <td class="col-3">Juan Alfonso Rojas</td>
                          <td class="col-2">Anafe</td>
                          <td class="col-2">TGNC050RH</td>
                          <td class="col-2">Cerrado</td>
                      </tr>
                       <tr class="d-flex">
                          <td class="col-1"><a href="detallellamada.html">235678F</a></td>
                          <td class="col-2">18/06/2019</td>
                          <td class="col-3">Juan Alfonso Rojas</td>
                          <td class="col-2">Anafe</td>
                          <td class="col-2">TGNC050RH</td>
                          <td class="col-2">Cerrado</td>
                      </tr>
                       <tr class="d-flex">
                          <td class="col-1"><a href="detallellamada.html">235678F</a></td>
                          <td class="col-2">18/06/2019</td>
                          <td class="col-3">Juan Alfonso Rojas</td>
                          <td class="col-2">Anafe</td>
                          <td class="col-2">TGNC050RH</td>
                          <td class="col-2">Cerrado</td>
                      </tr>
                       <tr class="d-flex">
                          <td class="col-1"><a href="detallellamada.html">235678F</a></td>
                          <td class="col-2">18/06/2019</td>
                          <td class="col-3">Juan Alfonso Rojas</td>
                          <td class="col-2">Anafe</td>
                          <td class="col-2">TGNC050RH</td>
                          <td class="col-2">Cerrado</td>
                      </tr>
                       <tr class="d-flex">
                          <td class="col-1"><a href="detallellamada.html">235678F</a></td>
                          <td class="col-2">18/06/2019</td>
                          <td class="col-3">Juan Alfonso Rojas</td>
                          <td class="col-2">Anafe</td>
                          <td class="col-2">TGNC050RH</td>
                          <td class="col-2">Cerrado</td>
                      </tr>
                       <tr class="d-flex">
                          <td class="col-1"><a href="detallellamada.html">235678F</a></td>
                          <td class="col-2">18/06/2019</td>
                          <td class="col-3">Juan Alfonso Rojas</td>
                          <td class="col-2">Anafe</td>
                          <td class="col-2">TGNC050RH</td>
                          <td class="col-2">Cerrado</td>
                      </tr>
                       <tr class="d-flex">
                          <td class="col-1"><a href="detallellamada.html">235678F</a></td>
                          <td class="col-2">18/06/2019</td>
                          <td class="col-3">Juan Alfonso Rojas</td>
                          <td class="col-2">Anafe</td>
                          <td class="col-2">TGNC050RH</td>
                          <td class="col-2">Cerrado</td>
                      </tr>
                       <tr class="d-flex">
                          <td class="col-1"><a href="detallellamada.html">235678F</a></td>
                          <td class="col-2">18/06/2019</td>
                          <td class="col-3">Juan Alfonso Rojas</td>
                          <td class="col-2">Anafe</td>
                          <td class="col-2">TGNC050RH</td>
                          <td class="col-2">Cerrado</td>
                      </tr>
                       <tr class="d-flex">
                          <td class="col-1"><a href="detallellamada.html">235678F</a></td>
                          <td class="col-2">18/06/2019</td>
                          <td class="col-3">Juan Alfonso Rojas</td>
                          <td class="col-2">Anafe</td>
                          <td class="col-2">TGNC050RH</td>
                          <td class="col-2">Cerrado</td>
                      </tr>

                    </tbody>
                </table>
              </div>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">...</a></li>
    <li class="page-item"><a class="page-link" href="#">20</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
    			</main>
  			</div>
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
