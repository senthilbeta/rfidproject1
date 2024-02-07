
<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a-Dashboard</title>

    <style>
    body{
      background-color: #97FEED;
      
    }
      /*-------------------attendance-report---------------------------*/
      .bca1{
            background-color: #0B666A;
            color: white;
            width: 200px;
            margin: 10px;
            border-radius: 5px;
            border-left: 5px solid red;
            text-align: center;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }

      .bca2{
        height: 87vh;
        background-color: #35A29F;
        margin: 12px;
        border-radius: 8px;
        overflow: scroll;

      }
	 /*-----------------------attendance-table--------------*/
      .bca2 table{
        border-collapse: collapse;
        background-color: white;
        margin: 15px;
        box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
      }
      .bca2 th{
        font-weight: bolder;
        background-color: #071952;
        color: #97FEED;
      }
     .bca2 table td,th{
        border: 1px solid #071952;
        width: 63vw;
        text-align: left;
        padding: 25px 10px;
      }
      .form-control{
  position:absolute;
 margin-left:40%;
 margin-top:-48px;
 padding:10px;
 width:300px;
 background-color: white;
 outline:none;
 border:none;
 box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
 border-radius:20px;
 color:black;
 }
 .form-control:focus{
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
    background-color:#1f1f1f;
    border-radius:50px;
 
 color:white;
 }
 .search-img{
height:38px;
width:39px;
border-radius:50px;
position:absolute;
margin-left:61%;
 margin-top:-49px;


 }
 .period1,.period2,.period3,.period4,.period5{
 color:white;
 font-size:18px;
 box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;

  text-shadow: 1px 1px 2px black, 0 0 25px white, 0 0 5px white;
 }
 .bca-back-button{
 position:absolute;
 margin-left:80%;
 margin-top:-50px;
 padding:8px 30px;
 background-color:#071952;
 color:white;
 text-decoration:none;
 border-radius:10px;
 
 }
 .bca-back-button:hover,.bca-back-button:focus{
 box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
 background-color:white;
 color:#071952;
 }
      </style>
    </head>

<body>
<div id="bca-attendancereport">
                    <div class="bca1">
                        <h4>Attendance List</h4>
                        <input type="text" class="form-control" id="live_search1" autocomplete="off" placeholder="search....."><img src="searchicon.png" class="search-img">
                        <a class="bca-back-button" href="admin.php#bca-attendancereport">back</a>
                    </div>
                    <div class="bca2" id="bbca">
  			             <table id="table1">
                            <tr>
                                <th>Name</th>
				                <th>RfidNo</th>
                                <th>RollNo</th>
                                <th>Date</th>
                                <th>10-11</th>
                                <th>11-12</th>
				                <th>12-1</th>
				                <th>2-3</th>
				                <th>3-4</th>
				
                            </tr>
                            <?php
			 include 'dbconnection.php';
             if(isset($_POST['find-s1'])) {
                $fname = $_POST['find-n1'];
                $rno = $_POST['find-n2'];
			 $sql = "select * FROM attendance  WHERE rollno='$rno' and name='$fname'";
			 $query = mysqli_query($connec,$sql);
			 $num = mysqli_num_rows($query);
			 if($num>0){
				while($result=mysqli_fetch_assoc($query)){
				$period1 = $result['period1'];
				$period2 = $result['period2'];
				$period3 = $result['period3'];
				$period4 = $result['period4'];
				$period5 = $result['period5'];
			
				
                           echo '<tr>';
                           echo '<td>'.$result['name'].'</td>';
                           echo '<td>'.$result['rfidno'].'</td>';
                           echo '<td>'.$result['rollno'].'</td>';
                           echo '<td>'.$result['date'].'</td>';
			   //echo '<td class="period1">'.$result['period1'].'</td>';
			   //echo '<td class="period2">'.$result['period2'].'</td>';
			   //echo '<td class="period3">'.$result['period3'].'</td>';
			   //echo '<td class="period4">'.$result['period4'].'</td>';
			    //echo '<td class="period5">'.$result['period5'].'</td>';
          			
          		   echo '<td class="period1" style="' . ($result['period1'] == 'present' ? 'background-color: green;' : 'background-color:red;') . '">' . $result['period1'] . '</td>';
        echo '<td class="period2" style="' . ($result['period2'] == 'present' ? 'background-color: green;' : 'background-color:red;') . '">' . $result['period2'] . '</td>';
        echo '<td class="period3" style="' . ($result['period3'] == 'present' ? 'background-color: green;' : 'background-color:red;') . '">' . $result['period3'] . '</td>';
        echo '<td class="period4" style="' . ($result['period4'] == 'present' ? 'background-color: green;' : 'background-color:red;') . '">' . $result['period4'] . '</td>';
        echo '<td class="period5" style="' . ($result['period5'] == 'present' ? 'background-color: green;' : 'background-color:red;') . '">' . $result['period5'] . '</td>';

        echo '</tr>';			
                           echo '</tr>';
				}
			}
        }
			?>

                        </table>
                        <div id="search_result1"></div>
                    </div>
                </div>

    
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- <script>
$(document).ready(function(){
    $("#find-s").click(function(){
        $("#find-student-detail").css("display","none");
        $("#table1").css("display","block"); 
    });
});
</script> -->
	
	<script type="text/javascript">
	$(document).ready(function(){
		$("#live_search1").keyup(function(){
		var input = $(this).val();
		if(input != ""){
		    $("#table1").css("display","none");
		
		    $.ajax({

			url:"attendancesearch.php",
			method:"POST",
			data:{input:input},
		
			success:function(data){
				$("#search_result1").html(data);
				$("#search_result1").css("display","block");
		  	}

	             });
		}
		else{
		 $("#search_result1").css("display","none");
		 $("#table1").css("display","block");
		}
	});
});
	</script>            
    </body>
    </html>