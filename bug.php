function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === null) {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = [1, 2, null, 4, null, 6];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [3] => 4 [5] => 6 )

// The problem is that the foreach loop modifies the array while iterating over it.
// This can lead to unexpected behavior and skipped elements. A better way is to use array_filter:

function bar(array $arr) {
  return array_filter($arr, function ($value) { return $value !== null; });
}

$arr = [1, 2, null, 4, null, 6];
$result = bar($arr);
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [3] => 4 [5] => 6 )