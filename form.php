<?php
$dbsurvername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="test_db";
$conn=mysqli_connect($dbsurvername,$dbuser,$dbpassword,$dbname);
if($conn)
{  
   if(isset($_POST['submit']))
   {
       $user=$_POST['user'];
       $pass=$_POST['password'];
       $sql="insert into demo_tb(username,passweord) values('$user','$pass') ";

       $result=mysqli_query($conn,$sql);
       if($result)
       {
           echo "Sucessfully Deta Inserted";
       }
       else
       {
           header("Location : html.php");
       }
   }
}

?>