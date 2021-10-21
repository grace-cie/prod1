<pre>
<?php
   function myfunction($v1,$v2)
   {
   return $v1 . "-" . $v2;
   }
   $a=array("Dog","Cat","Horse");
   print_r(array_reduce($a,"myfunction"));
?>
</pre>