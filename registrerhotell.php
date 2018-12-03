
<?php

 
    $filnavn="filer/hotell.txt";
	$hotellnavn=$_POST["hotellnavn"];
    
    if(!$hotellnavn)
        {
            print("Feltet må være fylt ut");
        }
   
            $filoperasjon="a";
            $linje=$hotellnavn. "\n";
            $fil=fopen($filnavn,$filoperasjon);
            fwrite($fil,$linje);
            fclose($fil);
            print("$hotellnavn er nå registrert på fil");
			
			
			
			$fil=fopen($filnavn,"r");
        while($linje=fgets($fil))
             {
                if($linje!=$hotellnavn)
                {   
                $del=explode(".",$linje);
                $hotellnavn=$del[0];
                
                print("$hotellnavn <br>");   
                }
            }
        fclose($fil);
            
        
?>