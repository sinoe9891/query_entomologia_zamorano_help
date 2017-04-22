<?php 
	require_once('../base/conexion.php');
	$sqlg = "SELECT DISTINCT `genus` FROM `entomologia3`";


	if ($genus = $mysqli->query($sqlg)) {
		while ($g=mysqli_fetch_array($genus)) {
			$autocomplete[]=$g['genus'];
		}
	}
	echo json_encode($autocomplete);
 ?>