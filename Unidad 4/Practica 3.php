<?php 
while(list($clave,$valor)=each($arr)){
    
    if(!($clave % 2)){//saltar los miembros pares}
        continue; 
}
    hacer_algo($valor)
}
$i=0; 
while($i++< 5){
    
    echo"Exterior<br/>\n"; 
    while(1){
        echo"Medio <br />\n"; 
        continue 3; 
        
    }
    echo"Esto nunca se imprimira <br />\n"; 
    
}
echo   "ni esto tampoco  <br />\n"; 
}
?>