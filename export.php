<?php
	require_once 'conn.php';
	
	header('Content-Type: text/csv; charset=UTF-8');
	header('Content-Disposition: attachment; filename=data.csv');
	
	$output = fopen("php://output", "w");
	fputcsv($output, array('emp_id', 'equipo1', 'entrenador1', 'g1', 'horafecha', 'g2', 'entrenador2', 'equipo2'));
	$query = $conn->query("SELECT * FROM `employee` ORDER BY `entrenador1` ASC");
	while($fetch = $query->fetch_assoc()){
		fputcsv($output, $fetch);
	}
	
	
	fclose($output);


?>
