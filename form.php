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
       $sql="select password from demo_tb where username='$user' ";
       $result=mysqli_query($conn,$sql);
       if(mysqli_num_rows($result))
       {
           $x=mysqli_fetch_assoc($result);
           if($x['password']===$pass)
           {
               echo "you have sucessfully loged in ";
           }
           else
           {
               header("Location: html.php");
           }

       }
       else
       {
           header("Location: html.php");
       }
   }
}

?>