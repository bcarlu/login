<?php require_once'head.php'; ?>
<?php require_once'login.php'; ?>

<?php if ($_POST) { ?>
	<div>
		<p>
		<?php login(); ?>
		</p>
	</div>
<?php } ?>

<body>

<form action="index.php" class="login-form" method="post">
		<h1>Login</h1>
		<div class="txtb">
			<input type="text" name="usuario">
			<span data-placeholder="Usuario"></span>
		</div>

		<div class="txtb">
			<input type="password" name="clave">
			<span data-placeholder="Contraseña"></span>
		</div>

		<input type="submit" class="logbtn" value="Ingresar">

		<div class="bottom-text">
			No tienes cuenta? <a href="#">Regístrate</a>
		</div>
	</form>

	<script>
		$(".txtb input").on("focus",function(){
			$(this).addClass("focus");
		});

		$(".txtb input").on("blur",function(){
			if($(this).val() == "")
			$(this).removeClass("focus");
		});
	</script>

<!--OTRA SECCION 
	<h3>Ingresa ó registrate para disfrutar de nuestra espectacular plataforma.</h3>
	<button>Ingresar</button>
	<button>Registrarme</button>



	<h3>Registro</h3>
	<form action="index.php" method="post">
		<p>
			<label>Usuario</label><br>
			<input type="text" name="usuario" required>
		</p>
		<p>
			<label>Email</label><br>
			<input type="email" name="email" required>
		</p>
		<p>
			<label>Password</label><br>
			<input type="password" name="password" required>
		</p>
		
		<input type="submit" name="ingresar" value="Registrarme">
	</form>
-->


	

	
</body>
</html>