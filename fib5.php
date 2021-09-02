<?php
     
     // fibonacci sequence
	function fib($n,&$memo){
          if(isset($memo[$n])) return $memo[$n];
    	     if($n<=2) return 1;
          $memo[$n] = fib($n-1, $memo)+ fib($n-2, $memo);
          return $memo[$n];
    }
    for($n=1;$n<=50;$n++){
     echo "$n"." ". fib($n, $memo); echo "<br>";
    }
  
?>