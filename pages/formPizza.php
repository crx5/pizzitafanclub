<script src="layout/scripts/jquery.min.js"></script>
<script src="scripts/parsley.js"></script>
<link href="layout/styles/formPizza.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <div class="container">
			<div class="row main">
				<div >
	               <div class="panel-title text-center">
	               		<!--<h1 class="title">REGISTRO</h1>-->
	               		<hr />
	               	</div>
	            </div>
				<div class="main-login main-center">
					<form class="form-horizontal" action="controller/controllerSession.php" method="post" data-parsley-validate>



						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Nombre</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-file-text " aria-hidden="true"></i></span>
									<input type="text"  class="form-control" name="nombre" id="email"  placeholder="nombre de la pizza"/>
								</div>

							</div>
						</div>

						<div class="form-group">
							<label for="telefono" class="cols-sm-2 control-label">Precio</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i></span>
									<input data-parsley-error-message="solo se permiten numeros" data-parsley-type="number" data-parsley-errors-container="#error-precio"   class="form-control" name="telefono" id="precio"  placeholder="precio de la pizza"/>
								</div>
								<div id="cont-error-precio">
										<p id="error-precio"></>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Descripcion</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-comment" aria-hidden="true"></i></span>
									<textarea rows="2" cols="50" maxlength="200" class="form-control" name="descripcion" id="descripcion"  placeholder="descripcion de la pizza"></textarea>
								</div>

							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Url de imagen</label>
							<div class="cols-sm-10">
								<div class="input-group">

									<span class="input-group-addon"><i class="fa fa-file-image-o" aria-hidden="true"></i></span>

									<input  data-parsley-error-message="ingrese url valida" data-parsley-errors-container="#error-url"  data-parsley-type="url"  class="form-control" name="password" id="confirm"  placeholder="inserte url de imagen"  />

								</div>
                <div id="contenedor-error">
										<p id="error-url"></>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit"  name="agregarPizza" class="btn btn-primary btn-lg btn-block login-button">Agregar</button>
						</div>

					</form>
				</div>
			</div>
		</div>
