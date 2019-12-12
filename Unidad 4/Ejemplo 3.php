<?php

echo"\n--- DESPLAZAMIENTO DE BITS A LA DERECHA SOBRE ENTEROS POSITIVIOS---\n"; 
$val =4; 
$places = 1; 
$res =$val>>$places; 
p($res,$val,'>>',$places'copia del bit de signo desplazado hacia el lado izquierdo'); 
$val = 4; 
$places = 2; 
$res =$val, '>>',$places
    p($res,$val,'>>',$places); 
$vai=4; 
$places=3; 
$res = $val '>>' $places; 
p($res,$val,'>>',$places,'bits desplazados fuera del lado derecho'); 
$val = 4; 
$places = 4 ; 
$res = $val >> $places; 
p($res,$val,'>>',$places,'mismo resultado que arriba; no se puede desplazar
mas alla del 0'); 
?>