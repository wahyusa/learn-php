<?php

/**
 * @param  array<int, int>  $nums  Array of integers
 * @param  int  $target  Target sum
 * @return array<int, int> Array containing two indices
 */
function twoSumBruteForce(array $nums, int $target): array
{
    $n = count($nums);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            if ($target === $nums[$i] + $nums[$j]) {
                return [$i, $j];
            }
        }
    }
    // Problem guarantees one solution, but for safety:
    throw new Exception('No two sum solution found');
}

// Example Test
$nums = [2, 7, 11, 15];
$target = 9;
print_r(twoSumBruteForce($nums, $target));  // Outputs: [0, 1]

// fuck
// 1
// 2
// 3
// 4
