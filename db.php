<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
if (isset($_POST['submit'])) {
$name = $_POST['name']; 
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

      if ($name!="" && $email!="" &&  $mobile!="" && $password==$cpassword)
         {
            if (!$conn)
             {
                 die('Could not connect: ' . mysql_error());
                 print_r("no");
             }
            else
             {
               $sql = "INSERT INTO users ". "(name,email, mobile, password, date) ". "VALUES('$name','$email',$mobile, $password, CURRENT_TIMESTAMP())";
              }
          }

      else{
             echo "fill all details correctly";
          }

  mysql_select_db('project');
  $retval = mysql_query( $sql, $conn );
   
  if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   echo "Entered data successfully\n";

}

  mysql_close($conn);
?>
