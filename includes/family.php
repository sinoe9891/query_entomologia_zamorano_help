<?php 
	require_once('../base/conexion.php');
	$sqlf = "SELECT DISTINCT `family` FROM `entomologia3`";
	

	if ($family = $mysqli->query($sqlf)) {
		while ($f=mysqli_fetch_array($family)) {
			$autocomplete[]=$f['family'];
		}
	}

	
	echo json_encode($autocomplete);
 ?>