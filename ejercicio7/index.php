<?php 
/*
Escribir código PHP que inicialice un arreglo con los números del 1 al 365. 
Determine a que mes pertenece el día del año. Y luego calcule cuántos días faltan para 
que se acabe el año con cada día del año, y muestre el mensaje “Falta poco para el año nuevo” 
solo si faltan menos de 5 días.
*/

/*$i = 1;
for ($i=1; $i < 366; $i++) { 
    echo ("<pre>");
    // echo $i;
    $date = array();
    array_push($date,$i);
    echo $date[$i];
    }
*/


//array_push($date);
//print_r ($date);
$date = array();
$dias = 366;

/*for ($j=1; $j <= 12; $j++) { 
    echo "<pre>";
    echo "Mes",$j,"<br>";
    /*for ($k=1; $k <=12 ; $k++) { 
  
    }


};*/
for ($i=0;$i<$dias;$i++) {
    array_push($date,$i);
    //echo "<pre>";
    //echo "Mes ",$j;

} 

/*if ($i=30) {
    echo ("Mes 1");
};*/

for ($i=0; $i < count($date); $i++) { 
 echo("<pre>");
 echo $date[$i];
 for ($j=0;$j<365;$j+=31){
    $k=0;
    $k++;
    //echo $k,"<br>";
    if ($date [$i]== $j) {
        //echo $j;
        echo "<pre>";
        echo "Mes ";
        
    }
 }

}




?>