<pre>
<?php

    echo 'array_change_key_case => Changes the case of all keys in an array'."</br>";
    $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
    print_r(array_change_key_case($age,CASE_UPPER))."</br>"; //It can be CASE_LOWER for lowercase

    
?>
</pre>