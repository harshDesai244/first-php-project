<?php
$Q1 = "do you want to know about speed of cars?";
echo "$Q1";
echo "<form name='form' action='' method='POST'>";
echo "<td><input type='radio' name='ans' value='yes' >yes</input></td>";
echo "<td><input type='radio' name='ans' value='no'>no</input></td>";
echo "<input type='submit' value='Click me!' name='xxx'>";

if (isset($_POST['xxx'])){
  $x = $_POST['ans'];
  echo $x;
  if ($x == 'yes'){
    echo "I am in Yes.";

    echo "<form name='form' action='' method='POST'>";
    echo "<label for='cars'>Choose a car:</label>";
    echo "<select id='cars' name='cars'>";
    echo "<option name='car' value='Ferari'>Ferari</option>";
    echo  "<option name='car' value='W Moters'>W Moters</option>";
    echo  "<option name='car' value='Lemburgini'>Lemburgini</option>";
    echo "<input type='submit' name='yyy' velue='submit'></input> ";
    if (isset($_POST['yyy'])){
      if (isset($_POST['cars'])){
        $y = $_POST['cars'];

        $car = "$y";

        switch ($car) {
            case "Ferari":
                echo "Max speed is 300 km/h" ;
            break;
            case "W Moters":
                echo "Max speed is 340 km/h" ;
            break;
            case "Lemburgini":
                echo "Max speed is 360 km/h" ;
            break;
        }
      }
    }
  }
  else{
      header("Location: que.php");
  }
}    

?>    