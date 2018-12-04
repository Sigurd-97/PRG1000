<?php
	 
		 
        $filnavn="filer/hotellromtype.txt";
        $filoperasjon="r";

            {
            print("Følgende hoteller er registrert <br/>");
            }
        $fil=fopen($filnavn,$filoperasjon);
        while($linje=fgets($fil))
             {
                if($linje!="")
                {   
                $del=explode(";",$linje);
                $hotellnavn=$del[0];
                $hotellromtype=$del[1];
				$antallrom=$del[2];
                print("$hotellnavn $hotellromtype $antallrom <br>");   
                }
            }
        fclose($fil);
    ?>
