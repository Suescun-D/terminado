<?php

function csvtoarray($archivo,$delimitador = ","){

	if(!empty($archivo) && !empty($delimitador) && is_file($archivo)):

		$array_total = array();

		$fp = fopen($archivo,"r");

		while ($data = fgetcsv($fp, 10000, $delimitador)){

			$num = count($data);

			$array_total[] = array_map("utf8_encode",$data);

		}

		fclose($fp);

		return $array_total;

	else:

		return false;

	endif;

}

$arraycsv = csvtoarray("Problema1.csv");

?> 
