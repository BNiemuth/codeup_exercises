<?

$things = array('Sgt Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $datatype) {
	
	if (is_int($datatype)) {
		echo "{$datatype} is an integer\n";

	}elseif (is_float($datatype)) {
		echo "{$datatype} is a float\n";

	}elseif (is_bool($datatype)) {
		echo "{$datatype} is a boolean\n";

	}elseif (is_array($datatype)) {
		echo "datatype is an array\n";

	}elseif (is_null($datatype)) {
		echo "{$datatype} is null\n";

	}elseif (is_string($datatype)) {	
		echo "{$datatype} is a string\n";

}
}
?>