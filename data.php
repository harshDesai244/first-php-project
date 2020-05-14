<?php
$dbsurvername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="test_db";
$conn=mysqli_connect($dbsurvername,$dbuser,$dbpassword,$dbname);
if ($conn)
{
    if(isset($_POST['go']))
    {
        $name=$_POST['name'];
        $lastName=$_POST['lastname'];
        $sql="INSERT INTO personal (name, last_name) VALUES ('$name','$lastName')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
          
    }
}