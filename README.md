# PHP Foreach Loop Modification During Iteration

This repository demonstrates a common issue in PHP when modifying an array while iterating over it using a `foreach` loop.  The example shows how removing elements during iteration can cause unexpected results, skipping elements and potentially leading to incorrect output.  A more efficient and safer solution using `array_filter` is provided.

## Bug Description
The `bug.php` file contains a function `foo` that attempts to remove `null` values from an array using a `foreach` loop.  Because the loop modifies the array in place, the iteration is disrupted, leading to elements being missed.

The `bugSolution.php` file demonstrates a better solution using `array_filter` which avoids this problem and provides a more concise and robust way to filter the array.

## How to reproduce

1. Clone the repository
2. Run `bug.php` and observe the unexpected output.
3. Run `bugSolution.php` and observe the correct output.

## Solution
Using `array_filter` is a more efficient and less error-prone way to remove null values from an array. It avoids the complications of modifying the array during iteration.