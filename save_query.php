<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		if(!empty($_POST['equipo1']) || !empty($_POST['entrenador1']) || !empty($_POST['g1']) || !empty($_POST['fechahora']) || !empty($_POST['g2']) || !empty($_POST['entrenador2'])|| !empty($_POST['equipo2'])){
			$equipo1 = $_POST['equipo1'];
			$entrenador1 = $_POST['entrenador1'];
			$g1 = $_POST['g1'];
			$fechahora = $_POST['fechahora'];
			$g2 = $_POST['g2'];
			$entrenador2 = $_POST['entrenador2'];
			$equipo2 = $_POST['equipo2'];
			
			$conn->query("INSERT INTO `employee` VALUES('', '$equipo1', '$entrenador1', '$g1', '$fechahora', '$g2', '$entrenador2', '$equipo2')") or die(mysqli_errno());
			echo "<script>alert('Datos ingresados exitósamente!')</script>";
			echo "<script>window.location = 'index.php'</script>";
		}else{
			echo "<script>alert('Por favor complete el campo requerido!')</script>";
			echo "<script>window.location = 'index.php'</script>";
		}
	
	}
	?>
	