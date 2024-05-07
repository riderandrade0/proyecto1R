<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">RIDER ANDRADE HEREDIA</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Agregar Partido</button>
		<br /><br />
		<table class="table table-bordered">
			<thead class="alert-success">
				<tr>
					<th>Equipo1</th>
					<th>Entrenador1</th>
					<th>g1</th>
					<th>fechahora</th>
					<th>g2</th>
					<th>Entrenador2</th>
					<th>Equipo2</th>
				</tr>
			</thead>
			<tbody style="background-color:#fff;">
				<?php
					require 'conn.php';
					
					$query = $conn->query("SELECT * FROM `employee` ORDER BY `entrenador1` ASC");
					while($fetch = $query->fetch_array()){
				?>
				<tr>
					<td><?php echo $fetch['equipo1']?></td>
					<td><?php echo $fetch['entrenador1']?></td>
					<td><?php echo $fetch['g1']?></td>
					<td><?php echo $fetch['fechahora']?></td>
					<td><?php echo $fetch['g2']?></td>
					<td><?php echo $fetch['entrenador2']?></td>
					<td><?php echo $fetch['equipo2']?></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
	
	
	<div class="modal fade" id="form_modal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form method="POST" action="save_query.php">
				<div class="modal-content">
					<div class="modal-body">
						<div class="col-md-4"></div>
						<div class="col-md-9">
							<div class="form-group">
								<label>Equipo1</label>
								<input class="form-control" type="text" name="equipo1"/>
							</div>
							<div class="form-group">
								<label>entrenador1</label>
								<input class="form-control" type="text" name="entrenador1"/>
							</div>
							<div class="form-group">
								<label>g1</label>
								<input class="form-control" type="number" name="g1"/>
							</div>
							<div class="form-group">
								<label>fechahora</label>
								<input class="form-control" type="text" name="fechahora"/>
							</div>
							<div class="form-group">
								<label>g2</label>
								<input class="form-control" type="number" name="g2"/>
							</div>
							<div class="form-group">
								<label>entrenador2</label>
								<input class="form-control" type="text" name="entrenador2"/>
							</div>
							<div class="form-group">
								<label>equipo2</label>
								<input class="form-control" type="text" name="equipo2"/>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button"  class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button>
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	
	
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
		
</html>