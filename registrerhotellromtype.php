<?php

 
    $filnavn="filer/hotellromtype.txt";
	$filnavn1="filer/hotell.txt";
	$hotellnavn=$_POST["hotellnavn"];
	$hotellromtype=$_POST["hotellromtype"];
	$antallrom=$_POST["antallrom"];
	$sjekk = true;
	$fil=fopen($filnavn1,"r");
	
	/* ny while loop */
	while($linje=fgets($fil))
             {
				
					$a = explode(";",$linje);
				$del1 = $a[0];
                if($del1==$hotellnavn)
                {   
					$sjekk = true;
					print ("$hotellnavn er allerede registrert på fil");
					break;
                }
            }
     fclose($fil);
    if(!$hotellnavn || $hotellromtype || $antallrom)
        {
            print("Feltet må være fylt ut");
        }
	if ($sjekk) true; {
		
		/* slutt ny while loop */
	
        while($linje=fgets($fil))
             {
				$a = explode(";",$linje);
				$del1 = $a[0];
				$del2 = $a[1];
				
                if($del1 == $hotellnavn && $del2 == $hotellromtype)
                {   
					$sjekk = false;
					print ("$hotellnavn , $hotellromtype er allerede registrert på fil");
					break;
                }
            }
     fclose($fil);
	 
     if(!$hotellnavn || !$hotellromtype || !ctype_digit($antallrom))
        {
			$sjekk=false;
            print("Feltet må være fylt ut");
        }
		
		
		
		
		else if  ($antallrom <= 0 ){
			$sjekk = false;
			print ("Antallrom må være større enn 0");
		}
		
	
		
	if ($sjekk){
            $filoperasjon="a";
            $linje= $hotellnavn. ";" .$hotellromtype. ";" .$antallrom  ."\n"  ;
            $fil=fopen($filnavn,$filoperasjon);
            fwrite($fil,$linje);
            fclose($fil);
            print("$hotellnavn  $hotellromtype $antallrom er nå registrert på fil");
	}	
			
			
			}
       
            
        
?>