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
        $birth_date=$_POST['birthdate'];
        $mobile_no=$_POST['mobileNo'];
        $gender=$_POST['sex'];
        $sql="INSERT INTO personal (name, last_name, birth_date, mobile_no, gender) VALUES ('$name','$lastName','$birth_date','$mobile_no','$gender')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
          
    }
}