<?php  
$data=['f','k','b','c','d'];

function minmax($data){
	$temp_data=$data;
	sort($temp_data);

	foreach ($data as $key => $value) {
		if ($value != $temp_data[0]) {
			unset($data[$key]);
		}else{
			break;
		}
	}
	sort($data);
	$hasil=[$data[0],$data[count($data)-1]];

	return json_encode($hasil);
} 
print_r(minmax($data));

?>