function bar(array $arr) {
  return array_filter($arr, function ($value) { return $value !== null; });
}

$arr = [1, 2, null, 4, null, 6];
$result = bar($arr);
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [3] => 4 [5] => 6 )