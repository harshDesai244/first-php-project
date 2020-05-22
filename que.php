<?php
$Q1 = "do you want to know about speed of cars?";
echo "$Q1";
echo "<form name='form' action='que.php' method='POST'>";
echo "<td><input type='radio' name='ans' value='yes' >yes</input></td>";
echo "<td><input type='radio' name='ans' value='no'>no</input></td>";
echo "<input type='submit' value='submit' name='submit'>";

if (isset($_POST['submit'])){
    $x = $_POST['ans'];

    if ($x == 'yes'){
        header("Location: cars.php");
    }
    else{
        header("Location: que.php");
    }
}    
?>    