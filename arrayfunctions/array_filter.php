<pre>
<?php
    function test_odd($var)
    {
    return($var & 1);
    }
  
  $a1=array(1,3,2,3,4);
  print_r(array_filter($a1,"test_odd"));
?>
</pre>