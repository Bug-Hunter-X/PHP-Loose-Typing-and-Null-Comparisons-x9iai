function foo(a, b) {
  if (a === null || b === null) {
    return null; // Return null to maintain type consistency.
  }  
  //Handle type juggling if a or b are not null but are 0 or false
  if (is_numeric($a) && is_numeric($b)) { 
     return $a + $b;
  }
  return $a + $b; 
}

$result = foo(0, null); // Returns null
$result2 = foo(null, false); // Returns null
$result3 = foo(0, false); // Returns 0

var_dump($result); // Output: NULL
var_dump($result2); //Output: NULL
var_dump($result3); // Output: int(0) 