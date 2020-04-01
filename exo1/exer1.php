<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>
<form method="POST" action="exer1.php">
	<input type="text" name="pg" id="pg">
	<input type="submit" name="submit" value="valider">
<body>    
    <?php
 if (isset($_POST['submit'])){
     if (isset($_POST['pg'])and is_numeric($_POST['pg'])and $_POST['pg']>10000) {
         $pg=$_POST['pg'];
         $tableau1=array();
         $i=0;
         $j=0;
         for ($i=2; $i <=$pg ; $i++) { 
             if(testNbPremier($i)==true){
                 $tableau1[$j]=$i;
                 $j++;
             }
         }
     }
 }
 //fonction nombre premier
 function testNbPremier($val){
     $bool=true;
               for ($i=2; $i < $val ; $i++) { 
                   if ($val%$i==0){
                       $bool=false;
                   break;
                   }
               }
               return $bool;
 }
  function moyenne($tableau1){
    $somme=0;
    for ($i=0; $i <count($tableau1) ; $i++) { 
        $somme=$somme+$tableau1[$i];
    }+
             $moyenne=$somme/count($tableau1);
             return $moyenne;
}

                       if (count($tableau1)!=0) {
                           $moyenne=moyenne($tableau1);
                           echo"la moyenne est";
                           echo $moyenne;
                           $tableau2=array("inferieur"=>array(),"superieur"=>array()  );
                           for ($i=0,$j=0,$k=0; $i <count($tableau1) ; $i++) {
                               if ($tableau1[$i]<$moyenne) {
                                $tableau2['inferieur'][$k]=$tableau1[$i];
                                $k++;
                                   
                               }
                               else {
                                $tableau2['superieur'][$j]=$tableau1[$i];
                                $j++;
                            } 
                               
                           }
                           
                       }
                       function compteur ($tab){
                        $compteur=0;
                        foreach ($tab as $key) {
                               $compteur++; 	
                            }
                            return $compteur;	
                        }
                       echo"<br>";
                      // echo"les nombres premiers inferieurs a la moyenne sont";

                   
               
               
           
       
    ?>
</body>
</html>