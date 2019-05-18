<?php  

function myCountChar($text, $find){
	$total=0;
	$array = str_split($text);
	foreach ($array as $key => $value) {
		if ($value == $find) {
			$total++;
		}
	}
	return $total;
}

echo myCountChar("Arie Azhari", "A");

?>