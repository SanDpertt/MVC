<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>

		<style>
			.container{
				border-radius: 10px;
				margin-top: 100px;
				padding: 50px;
				width: 700px;
				box-shadow: 8px 8px 24px 0px rgba(66, 68, 90, 1);
			}
		</style>

	</head>
	
	<body>
		<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<a href="index.php?c=vehiculos&a=nuevo" class="btn btn-primary">Agregar</a>
			
			<br />
			<br />
			<div class="table-responsive">
				<table border="1" width="80%" class="table">
					<thead>
						<tr class="table-primary">
							<th class="border-bottom border-3">Placa</th>
							<th class="border-bottom">Marca</th>
							<th>Modelo</th>
							<th>Año</th>
							<th>Color</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["vehiculos"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["placa"]."</td>";
							echo "<td>".$dato["marca"]."</td>";
							echo "<td>".$dato["modelo"]."</td>";
							echo "<td>".$dato["anio"]."</td>";
							echo "<td>".$dato["color"]."</td>";
							echo "<td><a href='index.php?c=vehiculos&a=modificar&id=".$dato["id"]."' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='index.php?c=vehiculos&a=eliminar&id=".$dato["id"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
		</div>
	</body>
</html>