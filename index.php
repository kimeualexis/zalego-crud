<html>
<head>
<title>Students</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>

	<main>
	<div class="container">

	<div class="col-sm-12">
	 <div class="page-header">
        <br>
        <h2 class="text-center text-primary"><b>Students</b></h2>
    </div>

<?php

include 'connect.php';
$sql="SELECT * FROM tbl_students";

$query=mysqli_query($conn, $sql);

echo "<table class='table'>
<thead>
<th>ID</th><th>Adm</th> <th>First Name</th> <th>Last Name</th> <th>Gender</th> <th>Class</th> <th>House</th> <th>Club</th>
</thead>";
while($row=mysqli_fetch_assoc($query)){
  echo "<tr><td>".$row['ID']. "</td><td>".$row['Adm']. "</td><td>".$row['Fname']. "</td><td>".$row['Sname']. "</td><td>"
  .$row['Gender']. "</td><td>" .$row['Class']. "</td><td>" .$row['House']. "</td><td>" .$row['Club']. "</td></tr>";
}
"</table>"
 ?>

</div>
</div>
</div>
</main>
</body>
</html>
