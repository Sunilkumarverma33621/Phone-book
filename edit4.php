<?php
include "connection4.php";
$name=$GET["id"];
$name="";
$number="";
$email="";
$res=mysqli_query($link,"select * from task4 where id=$id");

while($row=mysqli_fetch_array($res))
{
	$name=$row["name"];
	$number=$row["number"];
	$email=$row["email"];
}
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
      <input type="text" class="form-control" id="name" required placeholder="Enter the name" name="name"value="<?php echo $name;?>">
    </div>
    <div class="form-group">
      <label for="Phone number">Phone contact:</label>
      <input type="text" class="form-control" id="number" placeholder="Enter valid number" name="number"value="<?php echo $number;?>">
    </div>
    <div class="form-group">
      <label for="email">E-mail:</label>
      <input type="email" class="form-control" id="email" required placeholder="Enter valid E-mail" name="email" value="<?php echo $email;?>" >
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>

    <button type="update" name="update" class="btn btn-default">Update</button>
  
      </form>
    </div>
	
    </div>
	
	 
	</body>
	<?php
	if(isset($_POST["update"]))
	{
		mysqli_query($link,"update task4 set name='$_POST[name]',number='$_POST[number]',email='$_POST'[email]' where id=$id");
	
	?>
	<script type="text/javascript">
	window.location="index4.php";
	</script>
	<?php
	}
	?>

</html>