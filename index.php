<?php require_once'head.php'; ?>
<?php require_once'login.php'; ?>

<body>
	<h3>Inicio de Sesión</h3>
	<form action="index.php" method="post">
		<p>
			<label>Usuario</label><br>
			<input type="text" name="usuario" required>
		</p>
		<p>
			<label>Clave</label><br>
			<input type="password" name="clave" required>
		</p>
		
		<input type="submit" name="ingresar" value="Ingresar">
	</form>

<?php if ($_POST) { ?>
	<div>
		<p>
		<?php login(); ?>
		</p>
	</div>
<?php } ?>
	

	
</body>
</html>