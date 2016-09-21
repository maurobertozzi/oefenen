<?php
$norm = $_POST["norm"];
$naam = $_POST["naam"];
$fouten = $_POST["fouten"];

if($naam == ""){
  echo "Je hebt je naam niet ingevuld";
  echo "<br> <br>";
 }else{
    $naam = strtolower($naam);
    echo 'naam: '.ucfirst($naam);
}
echo ('<br>');
 if (strlen($fouten) > 2){
     echo "je kan niet meer dan 2 getallen invullen";
 }

 else if($fouten == ""){
  echo "Je hebt je aantal fouten niet ingevuld";
 }else{
     echo 'aantal fouten: ' . $fouten;
     echo "<br>";
     echo "de norm is " . $norm . "<br>";
     $cijfer = 10-($fouten/$norm);
     $afronden = round($cijfer, 1);
     echo 'je cijfer is: ' . $afronden;
 }
?>
<br>
<a href="1a.php">terug..</a>