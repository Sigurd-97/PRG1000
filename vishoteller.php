<?php
	 
		 
        $filnavn="filer/hotell.txt";
        $filoperasjon="r";

            {
            print("Følgende hoteller er registrert <br/>");
            }
        $fil=fopen($filnavn,$filoperasjon);
        while($linje=fgets($fil))
             {
				  $del=explode(";",$linje);
                if($linje!=";")
                {   
                $del=explode(".",$linje);
                $hotellnavn=$del[0];
                
                print("$hotellnavn <br>");   
                }
            }
        fclose($fil);
    ?>
