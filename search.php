<?php
$search="";
$r="";
$conn=mysqli_connect("localhost","root","","crud")or die("connection aborted");

	 
   $search_val="";
   if(isset($_POST['search_btn']))
    {
     $search_val=$_POST['search'];
     //$search_res="select * from exam WHERE name = ".$search_val;
     $res = mysqli_query($conn,"select * from exam WHERE name = $search_val");    
     {
				while($row = mysqli_fetch_assoc($res)) 
					?>
				<tr>
					<td><?php echo $row['id']?></td>
					<td><?php echo $row['name']?></td>
					<td><?php echo $row['add']?></td>
					<td><?php echo $row['mob']?></td>
				</tr>
			<?php }       
  }
   else
   {
    $res = mysqli_query($conn,"SELECT * FROM exam");
    echo "hello there";   
   }         
   ?> 
   <form method="post" action="search.php">
		<input type="text" name="search" >
		<input type="submit" name="search_btn" value="submit">
	</form>
		<table border="1">
			<thead>
				<tr>
					<th>no</th>
					<th>name</th>
					<th>address</th>
					<th>mobile</th>

				</tr>
			</thead>
			<tbody>
			<?php
			
			?>
			</tbody>

		</table>
<html>
<head>
</head>
<body>
	
</body>
</html>