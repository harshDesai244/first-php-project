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
        header("Location: form.php");
      }
      else
      { 
        echo "you entered wrong password.";
        ?>
       <a href="/login_form/html.php">LogIn</a>
       <?php
      }
    }
    else
    {
      echo "You have enter wrong Deta.";
      ?>
       <a href="/login_form/html.php">LogIn</a>
       <?php
    }
  }
}

?>