<?php require_once'head.php'; ?>
<?php require_once'login.php'; ?>



<body class="index">

<form action="index.php" class="login-form" method="post">
		<h1>Login</h1>
		<div class="txtb">
			<input type="text" name="usuario" required>
			<span data-placeholder="Usuario"></span>
		</div>

		<div class="txtb">
			<input type="password" name="clave" required>
			<span data-placeholder="Contraseña"></span>
		</div>

		<input type="submit" class="logbtn" value="Ingresar">

		<div class="bottom-text">
			No tienes cuenta? <a href="registro.php">Regístrate</a>
		</div>

		<?php if ($_POST) { ?>
		<div class="msg-success">
			<?php login(); ?>			
		</div>
		<?php } ?>
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

</body>
</html>