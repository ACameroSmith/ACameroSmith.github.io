<?php
function getWeekId(){
	
	$path = realpath(".");
	$basename = basename($path);
	// print_r($basename);

	$weekNr = "";

	for ($i = strlen($basename) - 1; $i >= 0; $i--) {
		if (is_numeric($basename[$i]))
			$weekNr = $basename[$i] . $weekNr;
		else
			break;
	}
	
	return $weekNr;
}

function extractLabNumber($pathString) {
	$path = realpath($pathString);
	// echo("The path is = " . $path . "<br>");
	$basename = basename($path);
	// echo("The basename is = " . $basename . "<br>");
	$labNrString = substr($basename,-2);
	if (!is_numeric($labNrString)) 
		$labNrString = substr($basename,-1);
	// echo("The labNrString is = " . $labNrString . "<br>");
	$labNrCharArray=str_split($labNrString);
	// print_r($labNrCharArray);
	// echo "<br>";

	$isNr= is_numeric($labNrString);

	if ( $isNr ) {
		// echo(" TRUE: isNr is = " . $isNr . "<br>");
		$labNr = (int)$labNrString;
	} else {
		// echo(" FALSE: isNr is = " . $isNr . "<br>");
		$labNr = "";
	}
	// echo "labNr = ".$labNr."<br>;";
	
	return $labNr;
}

function extractExNumber($pathString) {
	$path = realpath($pathString);
	// echo("The path is = " . $path . "<br>");
	$basename = basename($path);
	// echo("The basename is = " . $basename . "<br>");
	$exNrString = substr($basename,-1);
	// echo("The exNrString is = " . $exNrString . "<br>");
	$exNrCharArray=str_split($exNrString);
	// print_r($exNrCharArray);
	// echo "<br>";

	$isNr= is_numeric($exNrString);

	if ( $isNr ) {
		// echo(" TRUE: isNr is = " . $isNr . "<br>");
		$exNr = (int)$exNrString;
	} else {
		// echo(" FALSE: isNr is = " . $isNr . "<br>");
		$exNr = "";
	}
	// echo "exNr = ".$exNr."<br>";
	
	return $exNr;
}

?>