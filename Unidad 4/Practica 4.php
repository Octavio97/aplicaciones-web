<?php
/*Sentencia For*/

for($i=1;$i<=10;$i++) 
{
	
echo$i;
}


/*Ejemplo 3*/ 

$i = 1; 
for(;;)
{
	
	if($i>10)
{
	break; 
}
echo $i; 

$i++;


}

/* ejemplo 2 */ 
for($i=1;;$i++)
{
	if($i>10)
{
	
	break; 
}
echo $i; 
}

/*ejemplo 4*/ 

for($i=1, $j=0; $i<=10;$j+=$i, print $i,$i++)

?>