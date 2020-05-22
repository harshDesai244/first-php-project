<html>
<body>
<h1> Welcome to Form </h1>
<form action="data.php " method="POST">
Name:<input type="text"   placeholder="Enter name" name="name"> <br><br>
Last Name:<input type="text"   placeholder="Enter lastname" name="lastname"><br><br>
Gender:<td><input type="radio" name="sex" value="male" >Male</input></td>
		<td><input type="radio" name="sex" value="female">Female</input></td><br><br>
Birth Date:<input type="date" name="birthdate"><br><br>
Mobile No.:<input type="text" name="mobileNo"><br><br>

<input type="submit" value="submit" name="go"><br>


</body>
</html>

<?php
$Q1 = "do you want to know about speed of cars?";
echo "$Q1";
echo "<form name='form' action='cars.php' method='GET'>";
echo "<td><input type='radio' name='ans' value='yes' >yes</input></td>";
echo "<td><input type='radio' name='ans' value='no'>no</input></td>";
echo "<input type='submit' value='submit' name='submit'>";

if (isset($_GET['submit'])){
    $x = $_GET['submit'];

    if ($x == 'submit'){
        header("Location: cars.php");
    }
}


   
?>

