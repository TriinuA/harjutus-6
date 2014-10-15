<!DOCTYPE HTML>
<html> 
	<head> 
	  <title>Harjutus 6</title>
	  <meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="style/style.css">
	</head> 
	<body>
		<h2>Tingimuslaused</h2>
		<?php 
			$a=4;
			$b=5;
		 ?>	
		 <?php 
		 	if ($a < $b) {
		 		echo "$a on väiksem kui $b";
		 	}
		 ?>
		<?php 
		 	if ($b < $a) {
		 		echo "$a on väiksem kui $b";
		 	}
		 ?><br>
		 <?php 
		    if ($a < $b) {
            	echo "$a on väiksem kui $b";
    		} elseif ($a = $b) {
                echo "$a on $b";
    		} elseif ($a > $b) {
        		echo "$a on suurem kui $b";       // väljastus 4 on väiksem kui 5	
    		}
		 ?><br>
		 <?php 
		 	$a=3;
			$b=3;
		 ?>
		  <?php 
		    if ($a < $b) {
            	echo "$a on väiksem kui $b";
    		} elseif ($a = $b) {
                echo "$a on $b";
    		} elseif ($a > $b) {
        		echo "$a on suurem kui $b";       // väljastus 3 on 3	
    		}
    	 ?><br>
    	 <?php 
		 	$a=7;
			$b=2;
		 ?>
		 <?php 
		    if ($a < $b) {
            	echo "$a on väiksem kui $b";
    		} elseif ($a = $b) {
                echo "$a on $b";
    		} elseif ($a > $b) {
        		echo "$a on suurem kui $b";       /* väljastab 2 on 2 ja ma ei kujuta
        											ette, miks ta nii teeb*/
    		}
    	 ?><br>
    	 <?php
    	 	$age=22;
    	 	$age_limit=18;
    	 	$years_wait=$age_limit-$age; 
    	 ?>
    	 <?php 
		    if ($age>=$age_limit) {
            	echo "Olete piisavalt vana. Tulge edasi!";
    		} else {
                echo "Kahjuks olete liiga noor, te peate olema 
                vähemalt $age_limit aastat vana. Tulge $years_wait aasta pärast tagasi!";
    		}
    	 ?><br>
    	 <?php
    	 	$age=6;
    	 	$age_limit=18;
    	 	$years_wait=$age_limit-$age; 
    	 ?>
    	 <?php 
		    if ($age>=$age_limit) {
            	echo "Olete piisavalt vana. Tulge edasi!";
    		} else {
                echo "Kahjuks olete liiga noor, te peate olema 
                vähemalt $age_limit aastat vana. Tulge $years_wait aasta pärast tagasi!";
    		}
    	 ?><br>
    	 <?php
    	 	$age=18;
    	 	$age_limit=18;
    	 	$years_wait=$age_limit-$age; 
    	 ?>
    	 <?php 
		    if ($age>=$age_limit) {
            	echo "Olete piisavalt vana. Tulge edasi!";
    		} else {
                echo "Kahjuks olete liiga noor, te peate olema 
                vähemalt $age_limit aastat vana. Tulge $years_wait aasta pärast tagasi";
    		}
    	 ?><br>  
    	 <?php 
    	 	$aa = 3;
    	 	$bb = 3;
    	 	$cc = 4;
    	 	$dd = 5;
    	 ?>                                                           
    	 <?php 
    	 	if (($aa==$bb) && ($cc>$dd)) {
    	 		echo "$aa ja $bb on võrdsed ja $cc on suurem kui $dd"; /*jätab vahele, 
                                                                       sest teine lausepool on vale 5>4*/
    	 	}
    	 	elseif (($aa==$bb) || ($cc>$dd)) {                        
                echo "$aa ja $bb on võrdsed või $cc on suurem kui $dd"; /*see koodiplokk käivitub*/
    	 	}

    	 ?><br>
        <h3>Eitus</h3>
         <?php 
            if (isset($nothing)==false) {
                echo "Muutujat ei ole määratud"; /*ka selle valemiga väljastati see tulemus*/
            }
         ?><br>
         <?php 
            if (!isset($nothing)==false) {
                echo "Muutujat ei ole määratud"; /*selle variandiga ei käivitunud midagi*/
            }
         ?><br>

         <?php 
            if (!isset($nothing)==true) {
                echo "Muutujat ei ole määratud"; /*lause väljastati*/
            }
         ?><br>
         <h3>Switch laused</h3>
         <?php 
            $current_language="et";
            switch ("$current_language") {
                case 'et':
                    echo "Tere, kuidas Sul läheb?<br>";
                case "ru":
                    echo "Здравствуйте, Как вы делаете?<br>";
                case "fi":
                    echo "Hei, miten menee?<br>";
                default:
                    echo "Hello, How are you doing?<br>";
            }

          ?>
          <p><strong>Muudan muutuja $current_lang väärtuse "fi" peale</strong></p>
          <?php 
            $current_language="fi";
            switch ("$current_language") {
                case 'et':
                    echo "Tere, kuidas Sul läheb?<br>";
                case "ru":
                    echo "Здравствуйте, Как вы делаете?<br>";
                case "fi":
                    echo "Hei, miten menee?<br>";
                default:
                    echo "Hello, How are you doing?<br>";
            }
          ?>
          <p><strong>Lisan käskluse "break"</strong></p>
          <?php 
            $current_language="ru";
            switch ("$current_language") {
                case 'et':
                    echo "Tere, kuidas Sul läheb?<br>";
                    break;
                case "ru":
                    echo "Здравствуйте, Как вы делаете?<br>";
                    break;
                case "fi":
                    echo "Hei, miten menee?<br>";
                    break;
                default:
                    echo "Hello, How are you doing?<br>";
            }
          ?>
          <?php 
           $current_language="it";
            switch ("$current_language") {
                case 'et':
                    echo "Tere, kuidas Sul läheb?<br>";
                    break;
                case "ru":
                    echo "Здравствуйте, Как вы делаете?<br>";
                    break;
                case "fi":
                    echo "Hei, miten menee?<br>";
                    break;
                default:
                    echo "Hello, How are you doing?<br>";
            }
          ?>





    	 

	</body>	
</html> 