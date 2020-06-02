<?php
$Q1 = "do you want to know about speed of cars?";
echo "$Q1";
echo "<form name='form' action='' method='POST'>";
echo "<td><input type='radio' name='ans' value='yes' >yes</input></td>";
echo "<td><input type='radio' name='ans' value='no'>no</input></td>";
echo "<input type='submit' value='Click me!' name='xxx'>";

if (isset($_POST['xxx'])){
  $x = $_POST['ans'];
  if ($x == 'yes'){
    echo "
    <form name='form' action='' method='POST'>
    <input type='text' id='user' placeholder='Enter Username' name='user'>
    <input type='submit' value='submit' name='submit'>
    ";
    if(isset($_POST['submit'])){
      $user=$_POST['user'];
      echo "$user";
    } 
  }
}
?>