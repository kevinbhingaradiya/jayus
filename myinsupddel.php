<?php
	$fname="";
	$lname="";
	$city="";
	$mo="";
	$f=true;
	$update=false;
	$conn=mysqli_connect("localhost","root","","test")or die("connection failed");
	if(isset($_POST['add']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$city=$_POST['city'];
		$mo=$_POST['mo'];
		$q="insert into stest(fname,lname,city,mo)values('$fname','$lname','$city','$mo')";
		$res=mysqli_query($conn,$q);
		if($res)
		{
			?>
			<script>
				alert("record inserted");
			</script>
		<?php 	
		}
		else{
			?>
			<script>
				alert("record inserted");
			</script>
		<?php 	
		}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>register here</title>
	</style>
    </style>
</head>
<body>
	<input id="input" class="google" type="search" autocomplete="off" spellcheck="false" aria-live="polite" placeholder="Search Google or type a URL">
	<form method="post">
		<label>Enter first name</label><br>
		<input type="text" name="fname" id="fname"><br>
		<label>Enter last name</label><br>
		<input type="text" name="lname" id="lname"><br>
		<label>Enter city</label><br>
		<input type="text" name="city" id="city"><br>
		<label>Enter mobile number</label><br>
		<input type="text" name="mo"><br>
		<?php 
		  if($update==true)
		  { ?>
		  	<input type="submit" value="update record" name="update">
		  <?php }
		  else
		  { ?>
		  	<input type="submit" value="submit" name="add">

		  <?php } ?>
	</form>

	<table>
	
	</table>
</body>
</html>