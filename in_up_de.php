<?php
$sno_error = ''; 
$name_error = '';  
$address_error = '';
$mobile_error = ''; 
$con=mysqli_connect("localhost","root","","test1") or die("Database Not Connected");
$sno="";
$sname="";
$sadd="";
$mob="";
$f=true;
$update =false;
 if(isset($_POST['add']))
{
  $sno=$_POST['sno'];
  $sname=$_POST['sname'];
  $sadd=$_POST['sadd'];
  $mob=$_POST['mob'];
  
    if(empty($sno))
    {
    //echo "enter value for student number<br>";
      $sno_error = "Please Enter Student No";  
      $f=false;
    }
    elseif(strlen($sname)<=5)
    {
    //echo "enter value for student number<br>";
      $name_error = "Please more than 5 character";  
    $f=false;
    }
  if(strlen($sname)<=0)
    {
    //echo "enter value for student name<br>";
      $name_error = "Please Enter  Student Name"; 
    $f=false;
    }
  if(strlen($sadd)<=0)
    {
    //echo "enter value for student address<br>";
      $address_error = "Please Enter Student Address"; 
    $f=false;
    }
  
   if(empty($mob))
    {
    //echo "enter value for student mobile number<br>";
      $mobile_error = "Please Enter Student Mobile";  
    $f=false;
    }
  else if(strlen($mob)>=11)
    {
 
      $mobile_error = " Please Enter  Mobile No Less Than 10 digit"; 
    $f=false;
    }
  if($f==true)
  {
    $q="insert into stest(sno,sname,sadd,mob) values('$sno','$sname','$sadd','$mob')";
    $res=mysqli_query($con,$q);
  header("location:in_up_de.php");
  if ($res)
   {
        ?>
        <script>
          alert("Record Inserted");
        </script>
        <?php 
   }
   else{
    ?>
        <script>
          alert("Record Not Inserted");
        </script>
        <?php 
   }
   
  }

}
/*Delete record*/
if (isset($_GET['delete']))
 {
  $sno=$_GET['delete'];
  $sql="DELETE from stest where sno='$sno'";
  $retval = mysqli_query( $con, $sql );  
   ?>
  <script>
          alert("Record Deleted");
        </script>
  <?php
  
}

/*Edit The records*/   
if (isset($_GET['edit'])) {
  $sno=$_GET['edit'];
  $update =true;
  $update_query="SELECT * from stest where sno='$sno'";
  $update_result=mysqli_query($con,$update_query);

$row=mysqli_fetch_assoc($update_result);
  $sno=$row['sno'];
  $sname=$row['sname'];
  $sadd=$row['sadd'];
  $mob=$row['mob'];
}
if (isset($_POST['update'])) {
  $sno=$_POST['sno'];
  $sname=$_POST['sname'];
  $sadd=$_POST['sadd'];
  $mob=$_POST['mob'];

  $update_query="UPDATE stest SET sname='$sname',sadd='$sadd',mob='$mob' WHERE sno='$sno' ";
  $update_result=mysqli_query($con,$update_query);  
  ?>
    <script>
        alert("Record Updated");
     </script>
  <?php
  header("location:in_up_de.php");
}
/*Edit the record*/ 
 session_start();

?>


<!DOCTYPE html>
<html>
<style>
  body {
   
    text-align:center;    
}
  .forms{
   
    width: 50%;
    display: inline-table;
  }
input[type=text],input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 3px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 3px auto;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
label{
  float: left;
}

h3{
  text-align: center;
  font-size: 30px;
}
.text-danger{
  color: red;   
}
.text_for{
  float: left;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 90%;
  margin: 70px auto;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 15px;
}


td a{
  text-decoration: none;
}
.badge-primary {
    color: #fff;
    background-color: #007bff;
    padding: 0.5rem;
    border-radius: 5px;
}
.badge-success {
    color: #fff;
    background-color: #28a745;
    padding: 0.5rem;
    border-radius: 5px;
}
.badge-danger {
    color: #fff;
    background-color: #dc3545;
    padding: 0.5rem;
    border-radius: 5px;
}
 form .search_box{
  width: 50%;
}
.details_page{
    width: 50%;
    border: 1px solid #000;
    margin: auto;
    height: 400px;
  }
  .title{
   display: grid;
   float: left;
   margin:0px 24px 0 20px;
  }
   .titles{
    display: inline-grid;
    margin: 0;
    padding: 0;
  }
</style>
<body>

<h3>Register Form</h3>
<div class="forms">
  <form action="" method="post">
    
     <label >Student No &nbsp;&nbsp;&nbsp;<span class="text-danger">*</span></label> 
    <input type="text"  name="sno" placeholder="Your student no.." value="<?= $sno; ?>"><!-- value="<?php echo $sno; ?>"  -->
    <span class="text-danger text_for"><?php echo $sno_error; ?></span> <br><br><br>

    <label >Student Name &nbsp;&nbsp;&nbsp;<span class="text-danger">*</span></label> 
    <input type="text"  name="sname" placeholder="Your student name.." value="<?= $sname; ?>">     
    <span class="text-danger text_for"><?php echo $name_error; ?></span> <br><br><br>

    <label >Student Address &nbsp;&nbsp;&nbsp;<span class="text-danger">*</span></label> 
    <input type="text"  name="sadd" placeholder="Your student Address.." value="<?= $sadd; ?>">
    <span class="text-danger text_for"><?php echo $address_error; ?></span><br><br><br>

    <label >Student Mobile &nbsp;&nbsp;&nbsp;<span class="text-danger">*</span></label> 
    <input type="text"  name="mob" placeholder="Your student Mobile.." value="<?= $mob; ?>">  
    <span class="text-danger text_for"><?php echo $mobile_error; ?></span><br><br><br>
    <?php if ($update==true) 
      { ?>
        <input type="submit"  value="Update Record" name="update">
     <?php } 
     else {?>
      <input type="submit" value="Submit" name="add">
     <?php }?>
  </form>
</div>
<div>
   <?php 
  $search_val="";
  if (isset($_POST['search_btn'])) {
    $search_val=$_POST['search'];
    $search_res="SELECT * FROM stest WHERE sname=$search_val";
    $result = mysqli_query($con,$search_res);
    header("location:in_up_de.php");
    while($show = mysqli_fetch_assoc($res)){
      ?>
      <table>
        <thead>
        <tr>
        <td>USERNAME</td>
        <td>ADDRESS</td>                    
        <td>MOBILE</td>
        </tr>
    </thead>
      <tbody>
        <tr>
          <td><?php echo $show['sname']; ?></td>
          <td><?php echo $show['sadd']; ?></td>
          <td><?php echo $show['smob']; ?></td>
        </tr>
      </tbody>
    </table>
    <?php
  }
  }
  else
  {
   $result = mysqli_query($con,"SELECT * FROM stest");

  }

 
  ?> 
  <?php
$result = mysqli_query($con,"SELECT * FROM stest");
  ?>
  <h3>Show records</h3>  
    <form  action="in_up_de.php" method="POST">
  <input type="text"  placeholder="Search.."  class="search_box" name="search" value="<?php echo $search_val ?>"/>
  <input type="submit" name="search_btn" />  
</form>
  <table>
  <tr>
    <th>Student No</th>
    <th>Student Name</th>
    <th>Student Address</th>
    <th>Student Mobile</th>
    <th>Action</th>
  </tr> 
  <?php while($row = mysqli_fetch_assoc($result))  {
   ?> 

  <tr>

    <td><?= $row["sno"]; ?></td>
    <td><?= $row["sname"] ?></td>
    <td><?= $row["sadd"] ?></td>
    <td><?= $row["mob"] ?></td>
    <td>
    
       <a href="in_up_de.php?edit=<?= $row['sno'];?>" class="badge-success">Edit</a>  |
      <a href="in_up_de.php?delete=<?= $row['sno'];?>" class="badge-danger" onclick="return confirm('Do you want delete this record?');">Delete</a>  
    </td>
  </tr>
<?php } ?>
</table>

</body> 
</html>
