<?php

 
    $filnavn="filer/hotell.txt";
	$hotellnavn=$_POST["hotellnavn"];
	$sjekk = true;
	$fil=fopen($filnavn,"r");
        while($linje=fgets($fil))
             {
				
					$a = explode(";",$linje);
				$del1 = $a[0];
                if($del1==$hotellnavn)
                {   
					$sjekk = false;
					print ("$hotellnavn er allerede registrert på fil");
                }
            }
     fclose($fil);
    if(!$hotellnavn)
        {
            print("Feltet må være fylt ut");
        }
	if ($sjekk){
            $filoperasjon="a";
            $linje=$hotellnavn. ";" ."\n";
            $fil=fopen($filnavn,$filoperasjon);
            fwrite($fil,$linje);
            fclose($fil);
            print("$hotellnavn er nå registrert på fil");
	}	
			
			
			
       
            
        
?>