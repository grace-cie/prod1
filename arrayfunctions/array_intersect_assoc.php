<pre>
<?php
    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("a"=>"red","b"=>"green","c"=>"blue");
    
    $result=array_intersect_assoc($a1,$a2);
    print_r($result);
?>
</pre>