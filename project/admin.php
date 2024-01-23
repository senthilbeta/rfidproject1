<?php session_start();
if(empty($_SESSION['password'])):
    header('Location:alogin.php');
endif;
?>

<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('uidContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a-Dashboard</title>

    <style>

        *{
            padding: 0;
            margin: 0;
            font-family: serif;
        }
        body{
            background-color: #97FEED;
        }
        .body-container{
            display: grid;
            grid-template-columns: 1fr 4fr;


        }
       
        /*------------------------********************************-------------------------*/


        /*--------------------- nave-bar details----------------- */

        .navebar{
            background-color: #071952;
            height: 100vh;
            position: relative;
            display: block;
            display: grid;
            grid-template-rows: 1fr 1fr 2fr;

        }

         .sub-link2{ 
            width:200px;
            line-height: 40px;
            margin-left: 25px;
            margin-top: 20px;
            color: white;
            text-decoration: none;
            position: absolute;
            font-size: 18px;
            text-align: center;
            border-radius: 10px;
        } 
        .sub-link2:hover{
            background-color: white;
            color:  #97FEED;
	    font-size:18px;
            border-left: 5px solid red;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 18px 50px -10px;
		box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px, rgb(51, 51, 51) 0px 0px 0px 3px;

        }
        .sub-link1 a{ 
            width:200px;
            line-height: 40px;
            margin-left: 25px;
            margin-top: 20px;
            color: white;
            text-decoration: none;
            position: absolute;
            font-size: 18px;
            text-align: center;
            border-radius: 10px;
        }


        .sub-link1 a:hover{
            background-color: white;
            color: #071952;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
            border-left: 5px solid red;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 18px 50px -10px;

        }
        .sub-link1 a:focus{
            background-color:  #0B666A;
            color: red;
            border-left: 5px solid red;
            border-radius: 5px;
        }
        /*------------------------********************************-------------------------*/



        /*-----------------------dash-details-------------- */
        #dashboard{
            display: grid;
            grid-template-rows: 1fr 1fr 1fr;

        }

        #dashboard1{

            margin: 10px;
            background-color: #0B666A;
            color: white;  
            width: 140px;      
            border-left: 5px solid red;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }
        .dashboard2{

            background-color: #35A29F;
            height: 50vh;
            margin: 10px;
            border-radius: 8px;
            box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;


        }
        .dashboard3{

            background-color: #35A29F;
            margin: 10px;
            height: 25vh;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            border-radius: 8px;
            box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;

        }
        .present{
            height: 17vh;
            background-color: white;
            color: #071952;
            margin: 25px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
        }
        .absent{
            height: 17vh;
            background-color: white;
            color: #071952;
            margin: 25px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;

        }
        .hours{
            height: 17vh;
            background-color: white;
            color: #071952;
            margin: 25px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;

        }
           .present:hover{
           box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;
        }
         .absent:hover{
          box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;
        }
         .hours:hover{
           box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
        }
        /*------------------------********************************-------------------------*/


        /*----------------department details-------------------*/

        #department{
            display: grid;
            grid-template-rows: 1fr 2fr;
        }
        #department1{
            background-color: #35A29F;
            color: #F0F5F9;
            width: 200px;
            margin: 10px;
            border-radius: 5px;
            border-left: 5px solid red;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }
        #departments3{
            height: 60vh;
            background-color: #35A29F;
            margin: 10px;
            border-radius: 8px;
            color: #F0F5F9;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr; 
        }
        #bca1{
           background-color: #bbbfca;
           margin: 50px;
           width:260px;
           height: 20vh;
           padding: 15px;
           border-radius: 10px;
        }
        #date1 #report1{
            margin-top: 40px;
          padding: 10px;
          width: 140px;
          border-radius: 15px;
          color: #52616B;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;

        }
        #date2{
           background-color: #35A29F;
           margin: 50px;
           width:260px;
           height: 20vh;
           padding: 15px;
           border-radius: 10px;


        }
        #date2 #report2{
            margin-top: 40px;
          padding: 10px;
          width: 140px;
          border-radius: 15px;
          color: #52616B;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;

        }
        /*------------------------********************************-------------------------*/

        /*----------------attendance details--------------*/

        #attendance{
            display: grid;
            grid-template-rows: 1fr 2fr;
        }
        #attendance1{
            background-color: #0B666A;
            color: white;
            width: 200px;
            margin: 10px;
            border-radius: 5px;
            border-left: 5px solid red;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }
        #attendance2{
            background-color: #35A29F;
            margin: 10px;
            border-radius: 8px;
            color: #0B666A;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr; 
            box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;
        }
         #attendance-bca, #attendance-mca, #attendance-msc, #attendance-bba, #attendance-che, #attendance-bcom{
           background-color: white;
           margin: 30px;
           width:250px;
           height: 20vh;
           padding: 15px;
           border-radius: 10px;
           box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
        } 
         #attendance-msc a{
          margin-top: 40px;
          margin-left: 25px;    
          padding: 10px 40px;
          width: 140px;
          border-radius: 15px;
          color: #97FEED;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;
          background-color: #071952;
          text-decoration: none;


        }
       
        #attendance-bca a{
          margin-top: 100px;
          margin-left: 25px;    
          padding: 10px 40px;
          border-radius: 15px;
          color: #97FEED;
          text-decoration:none;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;
          background-color: #071952;

        }
         
        #attendance-mca a{
          margin-top: 40px;
          margin-left: 25px;    
          padding: 10px 40px;
          border-radius: 15px;
          color: #97FEED;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;
          background-color: #071952;
          text-decoration: none;

         }       
         #attendance-bba a{
          margin-top: 40px;
          margin-left: 25px;    
          padding: 10px 40px;
          border-radius: 15px;
          color: #97FEED;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;
          background-color: #071952;
          text-decoration: none;
         }       
         #attendance-bcom a{
          margin-top: 40px;
          margin-left: 25px;    
          padding: 10px 40px;
          border-radius: 15px;
          color: #97FEED;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;
          background-color: #071952;
          text-decoration: none;

         }       
         #attendance-che a{
          margin-top: 40px;
          margin-left: 25px;    
          padding: 10px 40px;
          border-radius: 15px;
          color: #97FEED;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;
          background-color: #071952;
          text-decoration: none;

         }       
        #attendance-bca a:hover{
   	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
   	color:white;
        }
        #attendance-che a:hover{
   	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
   	color:white;
        }
        #attendance-bba a:hover{
   	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
   	color:white;
        }
        #attendance-bcom a:hover{
   	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
   	color:white;
        }
        #attendance-mca a:hover{
   	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
   	color:white;
        }
         #attendance-msc a:hover{
   	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
   	color:white;
        }
        /*------------------------********************************-------------------------*/

/*------------------------********************************-------------------------*/


	  
        #self{
            position: relative;

        }
        #self1{
            height: 77vh;
            background-color:  #35A29F;
            margin: 10px;
            border-radius: 10px;
        }

        #self2{
            background-color: #0B666A;
            color: white;
            width: 200px;
            margin: 10px;
            border-radius: 5px;
            border-left: 5px solid red;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;

        }
       /* .readtag-container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            width: 500px;
            text-align: center;
            padding: 18px;
            margin-left: 258px;
            margin-top: 30px;
            position: absolute;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
        }*/
	.readform{
        border-collapse: collapse;
        background-color: white;
        margin: 5px;
        font-size:20px;
        width:390px;
        padding:5px;
        box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
	}
	 .readtag-container {
            background-color: white;
         	
            border-radius: 8px;
            overflow: hidden;
            width: 400px;
            text-align: center;
            padding: 18px;
            margin-left: 350px;
            margin-top: 20px;
            position: absolute;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
        }

	.readform td{
	padding:6px;
	}
       /*----------------rigestration details--------------*/
      
        #rigestration{
            position: relative;

        }
        #rigestration1{
            height: 77vh;
            background-color:  #35A29F;
            margin: 10px;
            border-radius: 10px;
        }

        #rigestration2{
            background-color: #0B666A;
            color: white;
            width: 200px;
            margin: 10px;
            border-radius: 5px;
            border-left: 5px solid red;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;

        }
	
        /*------------------------********************************-------------------------*/

        /*----------------display blocking  details--------------*/

        #dashboard:target, #attendance:target, #regular:target, #readtag:target, #self:target, #rigestration:target, #bca-attendancereport:target{
         display: block;
         }

        #dashboard, #attendance, #bca-attendancereport, #regular, #readtag, #rigestration, #self{
         display: none;
        }
        .dash-details{
            display: grid;
            grid-template-rows: 1fr 6fr;
        }
        .header{
            background-color: white;
            height: 13vh;
            top: 0;
        }
       /*------------------dropdown------------------*/
       .dropdown {
          position: relative;
        }
        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #0B666A;
        min-width: 160px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        z-index: 1;
        width: 200px;
        }
        .dropdown-content a {
      color: #F0F5F9;
      padding: 12px 16px;
      display: block;
      text-decoration: none;
    }
    .dropdown:hover .dropdown-content {
      display: block;
      color: #97FEED;
    }
    .sub-link2 a{
        text-decoration: none;
        /* color: #F0F5F9; */
    }
    .sub-link2 ul li a:hover{
        color: #1E2022;
        /* color: #F0F5F9; */
    }

    ul.no-bullets{
        list-style-type: none;

      }
      #a1:hover{
        color:#1E2022;
      }
      #al{
        color: #F0F5F9;
      }
      .dropdown-content a:hover{
            color: white;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
            border-left: 5px solid red;
            border-radius: 5px;
      }
      .img{
        border-radius: 50%;
        width: 100px;
        height: 100px;
        margin-left: 80px;
        border: 2px solid white;
        box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 48px;
        background-color: white;
        margin-top: -40px;
      }
      .img img{
        width: 100px;
        height: 100px;
        border-radius: 60%;
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
      }
       .name{
      margin-top:20px;
      margin-left:98px;
      color:white;
      
      }
      .img_aj{
        border-radius: 50%;
        width: 65px;
        height: 65px;
        border: 3px solid white;
        float: right;
        margin-top: -55px;
        margin-right: 10px;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
        cursor: pointer;
      }
      .img_aj img{
        width: 65px;
        height: 65px;
        border-radius: 50px;
      }
      .name-admin{
      margin-left:20px;
      margin-top:30px;
      color:#071952;
      
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
        height: 75vh;
        background-color: #35A29F;
        margin: 12px;
        border-radius: 8px;
        overflow: scroll;

      }
      /*------------------signup details---------------------------*/
      .signup-container {
            background-color: white;
         
            border-radius: 8px;
            overflow: hidden;
            width: 400px;
            text-align: center;
            padding: 18px;
            margin-left: 350px;
            margin-top: 10px;
            position: absolute;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
        }

        .signup-container h2 {
            color: #071952;
            margin-bottom: 20px;
        }

        .signup-form input,
        .signup-form select {
            width: 100%;
            padding: 6px;
            margin-bottom: 15px;
            border: 1px solid #071952;
            border-radius: 4px;
            box-sizing: border-box;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .signup-form .role-dependent-input {
            display: none;
        }

        .signup-form button {
            width: 100%;
            padding: 8px;
            background-color: #071952;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;

        }

        .signup-form button:hover {
            background-color: #97FEED;
            color: #071952;
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
        }

        .signup-form p {
            margin-top: 15px;
            font-size: 14px;
            color: #555;
        }

        .signup-form a {
            color: #2196F3;
            text-decoration: none;
        }

        .signup-form a:hover {
            text-decoration: underline;
        }

        .forgot-password {
            color: #777;
            font-size: 14px;
            margin-top: 10px;
            text-decoration: none;
            display: inline-block;
        }

        .google-button {
            background-color: #4285F4;
            color: #fff;
        }
        /*------------------------********************************-------------------------*/
       

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
        width: 65vw;
        text-align: left;
        padding: 20px;
      }
      /*-------------------attendance-button----------------*/
      .delete{
        padding: 8px;
        color: white;
        background-color: #071952;
        border: none;
        outline: none;
        border-radius: 10px;
        font-size: 15px;
        text-decoration: none;
        cursor: pointer;
       
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
      }
      .delete:hover{
        background-color: #97FEED;
        color: #071952;
}
	/*------------------logout process----------------------------------*/
	.dropbtn1 {
  margin-left:-5px;
  margin-top:-1px;
  width:75px;
  height:75px;
  border-radius:60%;
  color: white;
  padding: 5px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
}
.dropdown1{
position:relative;
display:inline-block;
}

.dropdown-content1 {;
  display: none;
  position: absolute;
  background-color:white;
  border-radius:15px;
  overflow: auto;
  box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
}

.dropdown-content1 a {
  color: #071952;
  padding: 16px 5px;
  text-decoration: none;
  display: block;
}

.dropdown-content1 a:hover {background-color: #f1f1f1}

.show {display:block;}

    /*------------------------------------------------------------------*/
  
    .dashboard3{

            background-color: #35A29F;
            margin: 10px;
            height: 25vh;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            border-radius: 8px;
            box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;

        }
        .present{
            height: 17vh;
            background-color: white;
            color: #071952;
            margin: 25px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
        }
        .absent{
            height: 17vh;
            background-color: white;
            color: #071952;
            margin: 25px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;

        }
        
        .hours{
            height: 17vh;
            background-color: white;
            color: #071952;
            margin: 25px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;

        }
        /*---------------------------------------------------------------*/
         .form-control{
  position:absolute;
 margin-left:40%;
 margin-top:-33px;
 padding:10px;
 width:300px;
 color:#071952;
 background-color: white;
 outline:none;
 border:none;
 box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
 border-radius:5px;
 }
 .form-control:focus{
 box-shadow: rgba(3, 102, 214, 0.3) 0px 0px 0px 3px;

 }
 .period1,.period2,.period3,.period4,.period5{
 color:white;
 font-size:18px;
 box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;

  text-shadow: 1px 1px 2px black, 0 0 25px white, 0 0 5px white;
 }
   
        /*------------------------********************************-------------------------*/

    </style>
</head>
<body>
	
<!-------------------------------------------------body-container(start)---------------------------------------------------->

    <div class="body-container">

        <!---------------------side navebar details(start)--------------------------->
        <div class="navebar">
                <div class="aj">
                    <h1 style="color:#52616B; margin-top: 20px;  margin-right: 10px; text-decoration: none; text-align: center;"><a href="https://www.anjaconline.org/" style="color: white; text-decoration: none;  text-shadow: 2px 2px 4px #000000;">ANJAC</a></h1>

                    <br><hr>
                </div>
                <div class="img-name">
                    <div class="img">
                    	
                        <img src="alogo.avif">
                    </div>
                    <div class="name">
                    	<?php
                    		echo "<h3>".$_SESSION['username']."</h3>";
                    	?>
                    </div>
                </div>

             <!-------------------navebar details link tages--------------------->
                <div class="link">
                    <div class="sub-link1">
              		 <a id="dash" href="#dashboard">Dashboard</a><br><br><br>
                    </div>
                    <div class="sub-link2">
                    <ul class="no-bullets">
                    <li class="dropdown">

                          <a id="a1"  style="color: white;">Registration</a>                         
                            <div class="dropdown-content">
                                <a href="#rigestration">REGISTRATION</a>
                                <a href="#self">READ TAG</a>
                            </div>
                    </li>
                    </ul>   
                   </div><br><br><br>
                    
                    <div class="sub-link1">
                        <a id="attend"href="#attendance">Students List</a><br><br><br>
                    </div>
                   	
                    <div class="sub-link1">
                        <a id="attend"href="#bca-attendancereport">Attendance List</a>
                    </div>
                </div>
        </div>
            <!-----------------------------sidenavebar details (end)--------------------------------->

    <!---------------------------------------------------------------------------------------------------------------->

        <!-------------------------------over all dashboard container details(start)-------------------------------->


        <div class="dash-details">
            <!--------header details(start)----->
            <div class="header" style="box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;">
            <div class="name-admin">
            	<?php
                    		echo "<h3>welcome, ".$_SESSION['username']."</h3>";
                    	?>
             </div>
                <div class="img_aj" id="logbtn">
                    <button id="mybtn1" class="dropbtn1"> <img src="alogo.avif" onclick="logout()"></button>
                    <div id="myDropdown1" class="dropdown-content1">
			<a href="loggoutprocess.php">Logout</a>
		   </div>
		</div>
            </div>
            <!------header details(end)----->



            <!------------------------- dashboard details(start)------------------>

            <div class="dashboard-container">
                <!-------dashboard details(start)-------->
                <div id="dashboard">
                    <div id="dashboard1">
                        <h4 style="margin-left: 20px;">Dashboard</h4>

                    </div>
                    <div class="dashboard2">

                    </div>
                    <div class="dashboard3">
                           <div class="present">
                            <h2 style="text-align: center;">TOTAL STUDENTS</h2>

				<?php
				  require 'dbconnection.php';
				  $query = "SELECT id FROM student ORDER BY id";
				  $query_run = mysqli_query($connec, $query);
				  $row = mysqli_num_rows($query_run);

				  echo '<h1 style="text-align: center; color:#52616B;">'.$row.'</h1>';
				?>
                           </div>

                           <div class="absent">
                            <h2 style="text-align: center;">DEPARTMENTS</h2>


                           </div>
                           <div class="hours">
                            <h2 style="text-align: center;">ABSENT TODAY </h2>
                           </div> 
                    </div>
                </div>
			
			
			
                <!------------Rigestration details(start)------------>

                <div id="department">

                    <div id="regular">
                        <div id="regular-departments">
                        <h4 style="margin-left: 20px;">Departments</h4>
                        </div>
                    </div>

                    <div id="readtag">
                        <div id="readtag1">
                            <h4 style="margin-left: 20px;">ReadTag</h4>
                        </div>
 	
                    </div>
                </div>
                <!------------Rigestration details(end)------------>

			


                <!-------------attendance details(start)-------------->

                <div id="attendance">
                    <div id="attendance1">
                     <h4 style="margin-left: 20px;">Attendance Report</h4>
                    </div>
                    <div id="attendance2">
                        <div id="attendance-bca">
                            <h3 style="margin-left: 10px;">DEPARTMENT OF BCA</h3><br><br>
                            <a href="bca-report.php" id="report1" >BCA</a> 

                        </div>
                        <div id="attendance-mca">
                            <h3 style="margin-left: 10px;">DEPARTMENT OF MCA</h3><br><br>
                            <a href="#mca-attendancerport" id="report1" >MCA</a>
                        </div>
                        <div id="attendance-msc">
                            <h3 style="margin-left: 10px;">DEPARTMENT OF BSc CS </h3><br><br>
                            <a href="#msc-attendancereport" id="report1">BSc CS</a>
                        </div>
                        <div id="attendance-bba">
                            <h3 style="margin-left: 10px;">DEPARTMENT OF BBA</h3><br><br>
                            <a href="#bba-attendancereport" id="report1">BBA</a>
                        </div>
                        <div id="attendance-bcom">
                            <h3 style="margin-left: 10px;">DEPARTMENT OF BCOM</h3><br><br>
                            <a href="#bcom-attendancereport" id="report1">BCOM</a>
                        </div>
                        <div id="attendance-che">
                            <h3 style="margin-left: 4px;">DEP OF CHEMISTRY</h3><br><br>
                            <a href="#che-attendancereport" id="report1">CHEMISTRY</a>
                        </div>


                    </div>
                </div>
        
                <!-------------attendance details(end)-------------->

		          <div id="self">
                    <div id="self2">
                        <h4 style="margin-left: 20px;">Readtag Form</h4>
                        </div>
                    <div id="self1">
                        <div class="readtag-container">
                                <h2>Readtag</h2>
                                          <form>
                                        <table class="readform">
                                            <tr>
                                                <td>
                                                    <b>Student Details</b>
                                                    </font>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="readfrom">
                                                        <tr>
                                                          <td align="left" class="lf">Roll No</td>
                                                            <td style="font-weight:bold">:</td>
                                                            <td align="left">----------------</td>
                                                        </tr>
                                                         <tr>
                                                            <td align="left" class="lf">Rfid No</td>
                                                            <td style="font-weight:bold">:</td>
                                                         <td align="left">----------------</td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" class="lf">Name</td>
                                                            <td style="font-weight:bold">:</td>
                                                    <td align="left">----------------</td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" class="lf">Gender</td>
                                                            <td style="font-weight:bold">:</td>
                                                             <td align="left">----------------</td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" class="lf">Email</td>
                                                            <td style="font-weight:bold">:</td>
                                                            <td align="left">----------------</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Password</td>
                                                            <td style="font-weight:bold">:</td>
                                                             <td align="left">----------------</td>                              
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
				</div>
                        </div>
                </div>


                <!--registration details(start)-------------->

                <div id="rigestration">
                    <div id="rigestration2">
                        <h4 style="margin-left: 20px;">Registration Form</h4>
                        </div>
                    <div id="rigestration1">
                        <div class="signup-container">
                                <h2>Registration</h2>
                                <form class="signup-form"  onsubmit="insertForm()"  action="registerprocess.php" method="post">
                                    <input type="text" placeholder="Full Name" name="n1"required>
				    <input type="text" placeholder="ID" name="n2"required>
                                    <input type="text" placeholder="ROLL NO" name="n3">
                                    <input type="email" placeholder="Email" name="n4" required>
                                    <input type="text" placeholder="sample image id" name="n6" required>
                                    <input type="password" placeholder="Password" name="n5" required>
                                        <select id="gender" name="gender">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                           
                                        </select>

                                    <button type="submit" name="b1">Submit</button>
                                </form>

                        </div>
                    </div>
                </div>

                <!-------------------registration details(end)------------------------------>
					<!----------------attendance-bca details(start)-------------------->  
                <div id="bca-attendancereport">
                    <div class="bca1">
                        <h4>Attendance List</h4>
                        <input type="text" class="form-control" id="live_search1" autocomplete="off" placeholder="search.....">	
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
			 $sql = 'select * FROM attendance ORDER BY name ASC';
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
			?>

                        </table>
                         <div id="search_result1"></div>
                    </div>
                </div>
      
		<!------------attendance-bca details(end)------------>
                      <!---------------------------------------->

            </div>
            
        </div>
        
         
        <!----------------------------over all dashboard container details(end)------------------------------>
    </div>
        <!--------------------------------------overall body-container details(end)------------------------------------>


    <script src="jquery.min.js"></script>
 <script>
            var blink = document.getElementById('blink');
                setInterval(function() {
                                blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
                                }, 750); 

 </script>
     
 <script>
 	document.getElementById("mybtn1").onclick = function(){
			myFunction()
			};
		 function myFunction()
			{
			document.getElementById("myDropdown1").classList.toggle("show");
			}

 </script>


   <script>
    function insertForm() {
      // Perform form submission logic here

      // Set a success flag in local storage
      localStorage.setItem('insertdata', 'true');
    }
  </script>

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

	<!--<script>
	$(document).ready(function(){
		if($period1 == 'period'){
				  $('.period1').css("background-color","red");
				  
				}
	});
	
	</script>-->
	
	
</body>
</html>
