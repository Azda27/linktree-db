<?php 
include 'session.php';
function tambah($data) {
	global $conn;
	$id = htmlspecialchars($data["id"]);
	$name = htmlspecialchars($data["name"]);
	$link = htmlspecialchars($data["link"]);
	$query = "INSERT INTO link VALUES('$id','$name', '$link')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
?>
<?php 
if( isset($_POST["submit"]) ) {
	if( tambah($_POST) > 0 ) {
	echo header("Location: data");
} else {
	echo header("Location: data");
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input</title>
	<style>textarea{resize: none;}</style>
</head>
<body>
 
	<br/>
	<a href="data">Data</a>
	<br/>
	<br/>
	<h3>Input Link</h3>
	<form method="post" action="">
			<div class="id">
				<span>Id</span>
				<br>
				<input type="text" name="id" require>
			</div>
			<div class="name">
				<span>Name</span>
				<br>
				<input type="text" name="name" require>
			</div>
			<div class="link">
				<span>Link</span>
				<br>
				<textarea name="link"></textarea>
				<p>include http / https</p>
			</div>
			<div class="submit">
				<button type="submit" name="submit">Input</button>
			</div>
	</form>
</body>