<?php  
require'functions.php';

$daff = query("SELECT * FROM daftar");

	if( isset($_POST["submit"]) ) {
		

		if( tambah($_POST) > 0 ) {
			echo "
				<script>
					alert('Data Berhasil di Tambah!');
					document.location.href = '6.php';
				</script>
			";
			
		}

}

if( isset($_POST["sub"]) ) {
	// var_dump($_POST);

if (edit($_POST["id"], $_POST["skill"]) > 0 );{
			echo "
				<script>
					alert('Skill Berhasil di Tambah!');
					document.location.href = '6.php';
				</script>
			";
		}

}

if( isset($_POST["cari"]) ) {
	$daff = cari($_POST["keyword"]);
}
?>




<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR PROGRAMMER</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h1 class="text-center mb-5">DAFTAR NAMA NAMA PROGRAMMER KERADDDD</h1>
	
	<h2 class="text-center">Tambah Programmer</h2>
	<table class="table table-bordered table-striped text-center">
		
		<tr>
			<th>Nama</th>
			<th>Skill</th>	
			<th>Gas</th>
		</tr>
		<tr>
		<form action="" method="post">

			<th>
				<input type="text" name="nama" class="form-control" placeholder="Nama" autocomplete="off" required>
			</th>
			<th>
				<input type="text" name="skill" class="form-control" placeholder="Skill" autocomplete="off" required>
			</th>
			<th>
				<button type="submit" name="submit" class="btn btn-primary">Tambah Boss!</button>
			</th>
		</form>
		</tr>
	</table>

<br>
<br>
<br>
<h2 class="text-center">Tambah Skill</h2>
<form action="" method="post">
		<input type="text" name="keyword" placeholder="Masukan Nama" autocomplete="off"  autofocus>
		<button type="submit" name="cari" class="btn btn-outline-success my-2 my-sm-0">Cari!</button>
	</form>
<table class="table table-bordered table-striped text-center">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Skill</th>
		<th>Tambah Skill</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach( $daff as $row ) : ?>

	<tr action="" method="post">
		<td><?php echo $i ?></td>
		<td><?php echo $row["nama"]; ?></td>
		<td><?php echo $row["skill"]; ?></td>
		<td>
			<form action="" method="post">
				<input name="id" value= "<?php echo $row["id"]; ?>" hidden>
				<input type="text" name="skill" placeholder="tambah skill" autocomplete="off" required>
				<button type="submit" name="sub" class="btn btn-dark">Tambah</button>
				<a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('anda yakin?')" class="btn btn-danger">X</a>
			</form>
		</td>
	 </tr>

	<?php $i++; ?>
	<?php endforeach; ?>

</table>
</div>
</body>
</html>