<pre>
<?php

    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("a"=>"red","b"=>"green","c"=>"blue","e" =>"black");

    $result=array_diff_assoc($a1,$a2);
    print_r($result);

    $res=array_diff_assoc($a2,$a1);
    print_r($res);
    
?>
</pre>