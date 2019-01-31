<?php
include 'navbar.php';
?>

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

  $sql = "SELECT * FROM tbl_students";
  $query = mysqli_query($conn, $sql);
  ?>

  <table class="table">
      <thead><th>ID</th><th>Adm</th><th>First Name</th><th>Last Name</th><th>Gender</th><th>Class</th><th>House</th><th>Club</th><th>Action</th></thead>

      <?php
      while($row=mysqli_fetch_assoc($query)){
        ?>

        <tr><td><?php echo $row['ID'];?></td><td><?php echo $row['Adm'];?></td><td><?php echo $row['Fname'];?></td><td><?php echo $row['Sname'];?></td><td><?php echo $row['Gender'];?></td><td><?php echo $row['Class'];?></td><td><?php echo $row['House'];?></td><td><?php echo $row['Club'];?></td><td><a href="create_stu.php?edit=<?php echo $row['ID'];?>" class="btn btn-success">Update</a>&nbsp;<a href="delete.php?delete=<?php echo $row['ID'];?>" class="btn btn-danger">Delete</a></td></tr>

      <?php }; ?>


  </table>
</div>
</div>
</div>
</main>
</body>
</html>