<?php
include 'connect.php';

if(isset($_POST['submit'])){
	$adm = $_POST['adm'];
	$fname = $_POST['fname'];
	$sname = $_POST['sname'];
	$gender = $_POST['gender'];
	$class = $_POST['class'];
	$house = $_POST['house'];
	$club = $_POST['club'];

	$sql="INSERT INTO tbl_students(Adm, Fname, Sname, Gender, Class, House, Club) VALUES('$adm', '$fname', '$sname', '$gender', '$class', '$house', '$club')";

	$query = mysqli_query($conn, $sql);

}

?>

<html>
<head>
<title>Add Student</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>

	<main>
	<div class="container">

	<div class="col-sm-5">
	 <div class="page-header">
        <br>
        <h2 class="text-center text-primary"><b>Add Student</b></h2>
    </div>

	<form class="form-horizontal" method="POST">

		<div class="form-group">
			<label class="control-label">Adm_no:</label>
			<input class="form-control" type="number" name="adm" required />
		</div>

		<div class="form-group">
			<label class="control-label">First Name:</label>
			<input class="form-control" type="text" name="fname" required />
		</div>

		<div class="form-group">
			<label class="control-label">Second Name:</label>
			<input class="form-control" type="text" name="sname" required />
		</div>

		<div class="form-group">
			<label class="control-label">Class:</label>
			<input class="form-control" type="text" name="class" required />
		</div>

		<div class="form-group">
			<label class="control-label">Gender:</label>
			<input class="form-control" type="text" name="gender" required />
		</div>

		<div class="form-group">
			<label class="control-label">House:</label>
			<input class="form-control" type="text" name="house" required />
		</div>

		<div class="form-group">
			<label class="control-label">Club:</label>
			<input class="form-control" type="text" name="club" required />
		</div>

		<br>
	  <div class="form-group">
            <button type="submit" class="btn btn-success" name="submit">Submit</button>
            <button type="reset" class="btn btn-warning">Reset</button>
      </div>
</div>

	</form>
</div>
</div>
</div>
</main>
</body>
</html>