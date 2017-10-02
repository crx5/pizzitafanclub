
<?php
session_start();
if(isset($_SESSION['user'])){
header('Location: index.php?menu=cuenta');

}
 ?>


<script src="layout/scripts/jquery.min.js"></script>
<script src="scripts/parsley.js"></script>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<!--<h1 class="title">REGISTRO</h1>-->
	               		<hr />
	               	</div>
	            </div>
				<div class="main-login main-center">
					<form class="form-horizontal" action="controller/controllerSession.php" method="post" data-parsley-validate>

					<!--	<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Nombre</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>   -->

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">E-mail</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="email" data-parsley-error-message="Ingrese un e-mail valido" data-parsley-errors-container="#error-mail" data-parsley-type="email" class="form-control" name="correo" id="email"  placeholder="ejemplo@gmail.com"/>
								</div>
								<div id="cont-error-mail">
										<p id="error-mail"></>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="telefono" class="cols-sm-2 control-label">Telefono</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
									<input data-parsley-error-message="Ingrese un numero de telefono valido" data-parsley-type="number" data-parsley-errors-container="#error-tel"  type="tel" class="form-control" name="telefono" id="telefono"  placeholder="Digite su telefono"/>
								</div>
								<div id="cont-error-tel">
										<p id="error-tel"></>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Contraseña</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Digite su contraseña"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirme su contraseña</label>
							<div class="cols-sm-10">
								<div class="input-group">

									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>

									<input type="password" data-parsley-error-message="Las contraseñas no coinciden" data-parsley-errors-container="#error"  data-parsley-equalto="#password"  class="form-control" name="password" id="confirm"  placeholder="Confirme su contraseña"  />

								</div>
								<div id="contenedor-error">
										<p id="error"></>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit"  name="registrarse" class="btn btn-primary btn-lg btn-block login-button">Registrarse</button>
						</div>
						<div class="login-register">
				            <a href="index.php">Login</a>
				         </div>
					</form>
				</div>
			</div>
		</div>
