<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
$name = $_POST['name']; 
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

      if ($password==$cpassword) {
          if (!$conn)
           {
               die('Could not connect: ' . mysql_error());
               print_r("no");
           }
          else{
          	 $sql = "INSERT INTO users ". "(name,email, mobile, password) ". "VALUES('$name','$email',$mobile, $password)";
              }

        }

      else{
        echo "password wrong";
      }

  mysql_select_db('project');
  $retval = mysql_query( $sql, $conn );
   
  if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   echo "Entered data successfully\n";
   
   mysql_close($conn);
?>
