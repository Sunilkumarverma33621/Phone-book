<?php
include "connection4.php";
?>
<html>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="col-lg-4">
  <h2>Contact details</h2>
  <form action="" name="form1" method="post">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" required placeholder="Enter the name" name="name">
    </div>
    <div class="form-group">
      <label for="Phone number">Phone contact:</label>
      <input type="text" class="form-control" id="number" placeholder="Enter valid number" name="number">
    </div>
    <div class="form-group">
      <label for="email">E-mail:</label>
      <input type="email" class="form-control" id="email" required placeholder="Enter valid E-mail" name="email" >
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit"name="submit" class="btn btn-default">Submit</button>
    <button type="reset" name="reset" class="btn btn-default">Reset</button></br>
	 <button type="search" name="search" class="btn btn-default">Search</button>
    <button type="update" name="update" class="btn btn-default">Update</button>
     <button type="delete" name="delete" class="btn btn-default">Delete</button>
      </form>
    </div>
	
    </div>
	
	 <div class="col-lg-12">
      <table class="table table-bordered">
    <thead>
      <tr>
	  <th>#</th>
        <th>Name</th>
        <th>Phone number</th>
        <th>E-mail</th>
		<th>Edit</th>
		<th>Delete</th>
      </tr>
    </thead>
    <tbody>
	     <?php
	  $res=mysqli_query($link,"select * from task4");
	  while($row=mysqli_fetch_array($res))
	  {
		  echo"<tr>";
		  echo"<td>"; echo $row["id"]; echo"</td>";
		  echo"<td>"; echo $row["Name"]; echo"</td>";
		   echo"<td>"; echo $row["Phone contact"]; echo"</td>";
		    echo"<td>"; echo $row["E-mail"]; echo"</td>";
             echo"<td>"; ?><a href="edit.php?id=<?php echo $row["id"];?>"><button type="button" class="btn btn-success">Edit</button></a><?php echo"</td>";
			echo"<td>"; ?> <a href="delete.php?id=<?php echo $row["id"];?>"><button type="button" class="btn btn-danger">Delete</button></a><?php echo"</td>";
			echo"</tr>";
	  }
	  ?>
    </tbody>
  </table>
  </div>
	</body>
<?php
if(isset($_POST["submit"]))
{
  mysqli_query($link,"insert into task4 values(NULL,'$_POST[name]','$_POST[number]','$_POST[email]')");
  ?>
  <script type="text/javascript">
  window.location.href=window.location.href;
  </script>
  <?php
}
if(isset($_POST["delete"]))
{
  mysqli_query($link,"delete from  task4 where name='$_POST[name]'")or die(mysqli_error($link));
    ?>
  <script type="text/javascript">
  window.location.href=window.location.href;
  </script>
<?php
}
if(isset($_POST["update"]))
{
  mysqli_query($link,"update task4 set name='$_POST[name] '")or die(mysqli_error($link));
    ?>
  <script type="text/javascript">
  window.location.href=window.location.href;
  </script>
  <?php
  
}


?>
</html>