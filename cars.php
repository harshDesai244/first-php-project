<?php
echo "<form name='form' action='' method='POST'>";
echo "<label for='cars'>Choose a car:</label>";
echo "<select id='cars' name='cars'>";
echo  "<option name='ans' value='Ferari'>Ferari</option>";
echo  "<option name='ans' value='W Moters'>W Moters</option>";
echo  "<option name='ans' value='Lemburgini'>Lemburgini</option>";
echo "<input type='submit' value='submit' name='submit'>";
if (isset($_POST['submit'])){

    if (isset($_POST['cars'])){
        $x = $_POST['cars'];

        $car = "$x";

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
?>
