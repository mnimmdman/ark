<?php  

function CetakStringAcak($hasil){
	$length = 32;
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
    $data = [];

    // looping
	for($i=1; $i<=$hasil; $i++){
		$stringacak = '';

        //set random 32 string
        for($j=0; $j < $length; $j++) {
            $stringacak .= $characters[rand(0, $charactersLength - 1)];

        }

        //validasi data yang sama 
        if (in_array($stringacak, $data)== false) {
           $data[]= $stringacak;
        }else{
            $i--;
        }
	}

    return json_encode($data);
}


print_r(CetakStringAcak(3));