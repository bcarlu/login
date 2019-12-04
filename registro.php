<?php require_once'head.php'; ?>
<?php require_once'login.php'; ?>



<body class="registro">

<form action="registro.php" class="reg-form" method="post">
		<h1>Registro</h1>
		<div class="txtb-reg">
			<input type="text" name="usuario" required>
			<span data-placeholder="Usuario"></span>
        </div>
        
        <div class="txtb-reg">
			<input type="email" name="email" required>
			<span data-placeholder="Email"></span>
		</div>

		<div class="txtb-reg">
			<input type="password" name="clave" required>
			<span data-placeholder="Contraseña"></span>
		</div>

		<input type="submit" class="logbtn-reg" value="Registrarme">

		<div class="bottom-text">
			Ya te registraste? <a href="index.php">Ingresar</a>
		</div>

		<?php if ($_POST) { ?>
		<div class="msg-success">
			<?php registro(); ?>			
		</div>
		<?php } ?>
	</form>

	<script>
		$(".txtb-reg input").on("focus",function(){
			$(this).addClass("focus");
		});

		$(".txtb-reg input").on("blur",function(){
			if($(this).val() == "")
			$(this).removeClass("focus");
		});
    </script>
    
</body>
</html>