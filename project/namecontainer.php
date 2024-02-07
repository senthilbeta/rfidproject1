<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "project";

// $UIDresult='C03779A6';

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

    include 'dbconnection.php';
  $sql = "SELECT * FROM student WHERE id='C03779A6'";
    $query = mysqli_query($connec,$sql);
    $num = mysqli_num_rows($query);
    if($num>0){
     while($result=mysqli_fetch_assoc($query)){
        echo $result['name'];
     }
    }

$conn->close();

?> 





