<?php

$n=10;
$first=0;
$next=1;
for($i=0;$i<10;$i++)
{
	 echo $first.',';
	 $third= $next+$first;
	 $first=$next;
	 $next=$third;
	 
	  
}


function fabocini($n)
{
   if($n==0)
   {
	   return 0;
   }
   else if($n==1)
   {
	 return  1;
   }
   else{
	   return (fabocini($n-1)+ fabocini($n-2));
   }
   
   
}
$n=10;
   
   for($i=0;$i<$n;$i++)
   {
	   echo fabocini($i),' ';;
   }
  // echo 'mamta';
  //factorial program: 
   $factorial_variable=10;
   $k=1;
   $fabconi=1;
  for($j=$factorial_variable;$j>=1;$j--)
   {
	  // echo $j;

	  echo $j;
	  
	  if($j<=$factorial_variable && $j>1)
	  {
		  echo '*';
	  }
   }
?>