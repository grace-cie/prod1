<pre>
<?php
array_is_list([]); // true
array_is_list(['apple', 2, 3]); // true
array_is_list([0 => 'apple', 'orange']); // true

// The array does not start at 0
array_is_list([1 => 'apple', 'orange']); // false

// The keys are not in the correct order
array_is_list([1 => 'apple', 0 => 'orange']); // false

// Non-integer keys
array_is_list([0 => 'apple', 'foo' => 'bar']); // false

// Non-consecutive keys
array_is_list([0 => 'apple', 2 => 'bar']); // false
?>
</pre>