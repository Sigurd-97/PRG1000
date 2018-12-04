<?php
include("sidestart.html");

        $filnavn="rom.txt";
        $filoperasjon="r";
            {
            print("Følgende rom er registrert: <br/>");
            }
        $fil=fopen($filnavn,$filoperasjon);
        while($linje=fgets($fil))
             {
                {$del = explode (";" , $linje);  /* innholdet av linjen delt opp i fornavn og etternavn */
                  $hotell=trim($del[0]);  /* fornavn hentet ut */
                  $romtype=trim($del[1]);  /* etternavn hentet ut */
                  $romnummer=trim($del[2]);  /* etternavn hentet ut */
                  print ("$hotell $romtype $romnummer <br />");
                }
            }
        fclose($fil);
        include("sideslutt.html");
    ?>
