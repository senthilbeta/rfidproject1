<?php
    include 'dbconnection.php';
	$id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
	}
	
        $sql = "SELECT * FROM student where id = '$id'";
        $query = mysqli_query($connec, $sql);
        $num = mysqli_num_rows($query);
		if($num>0){
			while($result=mysqli_fetch_assoc($query)){
			   $name = $result['name'];
			   $id = $result['id'];
			   $rollno = $result['rollno'];
			   $email = $result['email'];
			   $gender = $result['gender'];

			   
			}
		   }
		   $msg = null;
		 if($num == 0) {
				   $msg = "The ID of your Card / KeyChain is not registered !!!";
				   $result['id'] = $id;
				   $name = $result['name'] = "-----------------";
				   $rollno= $result['rollno'] = "---------------";
				   $email =$result['email'] = "----------------";
				   $gender=$result['gender'] = "---------------";
			   } 
		 else {
				   $msg = null;
			 }
		   
		
			
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <style>
        td.lf {
            padding-left: 15px;
            padding-top: 12px;
            padding-bottom: 12px;
        }
    </style>
</head>

<body>
    <div>
        <form>
            <table style="padding: 2px">
                <tr>
                    <td style="background-color:#071952; color:white; padding:10px; box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;">
                        <b>Student Details</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table style="width:580px; height:300px; border:0; align:center; cellpadding:5; cellspacing:0;">
                            <tr>
                                <td style="font-weight:bold; text-align:center; width:200px;" class="lf">RFID</td>
                                <td style="font-weight:bold; width:80px;">:</td>
                                <td style="text-align:left;"><?php echo $id; ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold; text-align:center; width:200px;" class="lf">NAME</td>
                                <td style="font-weight:bold">:</td>
                                <td style="text-align:left;"><?php echo $name; ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold; text-align:center; width:200px;" class="lf">ROLL NO</td>
                                <td style="font-weight:bold">:</td>
                                <td style="text-align:left;"><?php echo $rollno; ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold; text-align:center; width:200px;" class="lf">EMAIL</td>
                                <td style="font-weight:bold">:</td>
                                <td style="text-align:left;"><?php echo $email; ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold; text-align:center; width:200px;" class="lf">GENDER</td>
                                <td style="font-weight:bold">:</td>
                                <td style="text-align:left;"><?php echo $gender; ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </form>
		<p style="color:red;"><?php echo $msg; ?></p>

    </div>
</body>
</html>
