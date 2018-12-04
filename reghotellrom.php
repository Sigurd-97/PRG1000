<?php
include("sidestart.html");
?>





<h3>Registrer Hotellnavn, Romtype og romnummer</h3>

<form method="POST" action="" id="student" name="student" onsubmit="return validerRegistrerStudent(event)" >
   Hotellnavn: <input type="text" id="hotellnavn" name="hotellnavn" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" required /> <br>
   Romtype: <input type="text" id="romtype" name="romtype" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" required /> <br>
   Romnummer: <input type="text" id="romnummer" name="romnummer" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" required /> <br>
   <input type="submit" value="registrer" id="registrer" name="registrer"/>
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill"/> <br>
 </form>





 <?php
 $filnavn="rom.txt";
 if (isset($_POST ["registrer"]))
 {

 $hotellnavn=$_POST["hotellnavn"];
 $romtype=$_POST["romtype"];
 $romnummer=$_POST["romnummer"];
 $lovligromnr=true;
 $sjekk = true;


 $filnavn="rom.txt";


$fil=fopen($filnavn,"r");
     while($linje=fgets($fil))
          {
            $a=explode(";",$linje);
            $del1=$a[0];
            $del2=$a[0];

          if ($del1 == $hotellnavn && $del2 == $romtype) {
       $sjekk = false;
       print ("$hotellnavn og $romtype er allerede registrert på fil");
             }
         }
  fclose($fil);

if ($sjekk=false) {
  $lovligromnr=false;
}





 if (!$hotellnavn ||!$romtype ||!$romnummer)
 {
   echo "Alle feltene må fylles ut";
 }

 else if (strlen($romnummer)!=3) {
   $lovligromnr=false;
   echo ("Romnummer er ikke tre tegn.");
 } else if (!is_numeric($romnummer)) {
   $lovligromnr=false;
   echo ("Romnummer er ikke et siffer.");
 }



  else if ($hotellnavn && $romtype && $lovligromnr)
 {
   $filoperasjon="a";
   $linje=$hotellnavn . ";" . $romtype . ";" . $romnummer .  "\n";
   $fil = fopen($filnavn,$filoperasjon);
   fwrite ($fil,$linje);
   fclose ($fil);
   echo "Rom er registert.";
 }
}
/*
if (ctype_digit($romnummer)!=3) {
  $lovligromnr=false;
  echo ("Johan suger");
}
*/

include("sideslutt.html");

?>
