<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
     
      
      $myusername = mysqli_real_escape_string($con,$_POST['username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT id FROM adminlogin WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      
		
      if($count == 1) {
         
         $_SESSION['myusername']="something";
         $_SESSION['login_user'] = $myusername;
         
         header("location: view.php");
      }else {
         echo 'Kredencialet tuaja nuk jane te sakta! Ju lutemi provoni perseri!';
      }
   }
?>
<html>
   
   <head>
      <title>Login</title>
      
      <style type = "text/css">
         
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
            background: #33FFDA;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
            background: white;
         }
         .button{
             color:white;
             background: #7D47F2;
             
         }
         .button:hover{
             background: green;
         }
         h1{
             text-align: center;
             color:darkblue;

         }

      </style>
      
   </head>
   
   <body>
       <h1><i>Kjo nderfaqe eshte vetem per administratoret!</i></h1>
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:blue; color:#FFFFFF; padding:10px;"><b>Login</b></div>
				
            <div style = "margin:60px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" class="button" value = " HYR "/><br />
               </form>
               
               
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>