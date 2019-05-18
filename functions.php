<?php  
// koneksi ke DB
$conn = mysqli_connect("localhost", "root", "", "programmer");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	global $conn;
	$nama = htmlspecialchars($data["nama"]);
	$skill = htmlspecialchars($data["skill"]);	

	$query = "INSERT INTO daftar (nama, skill) VALUES('$nama', '$skill')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}


function edit($id, $skill) {
	global $conn;
	// $id = $data["id"]; 
	// $skill = $skill["skill"];
	// operator (+ - / * . %)

	$query = "UPDATE daftar SET 
			skill = CONCAT(skill, ', $skill')
			WHERE id = $id
	";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}


function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM daftar WHERE id=$id");
	return mysqli_affected_rows($conn);
}

function cari($keyword) {
	$query = "SELECT * FROM daftar 
			WHERE nama LIKE '%$keyword%'";

			return query($query);
}

?>