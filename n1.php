<?php  
$data =[
		"nama" => "arie azhari",
		"address" => "medan",
		"hobbies" => ["internet", "baca"],
		"is_married" => false,
		"school" => (object)["highschool" => "SMA 1 Binjai", "university" => "USU"],
		"skill" => new ArrayObject (["photoshop" => "75%", 
					"coding" => "25%"])
	];


function formatJson($data){
	return json_encode($data);
}
echo json_encode($data);