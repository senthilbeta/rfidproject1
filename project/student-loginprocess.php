<?php session_start();

include('dbconnection.php');

  if(isset($_POST['b1'])){

    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $sql = "select * from student where name='$user' and pass='$pass'";
    $res = mysqli_query($connec, $sql);
    if($res->num_rows > 0){
    	$row = $res->fetch_assoc();
    	  $_SESSION['user_email'] = $row['email'];
    	  $_SESSION['user_name'] = $row['name'];
    	  $_SESSION['user_pass'] = $row['pass'];
    	  $_SESSION['user_rollno'] = $row['rollno'];
    	  $_SESSION['user_gender'] = $row['gender']; 
    	  
    	   header("Location:student.php");
    	  
    	}
    	else{
  		header("Location:slogin.php");
  		echo "<h2>Invalid username or password<h2>";
  	}
  		  
		
    	                
    }
 
 
?>
