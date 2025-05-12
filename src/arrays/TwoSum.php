<?php

declare(strict_types=1);

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

// -------------------

/**
 * @param  array<int, int>  $nums  Array of integers
 * @param  int  $target  Target sum
 * @return array<int, int> Array containing two indices
 */
function twoSumHashMap(array $nums, int $target): array
{
    $mapTemp = [];
    foreach ($nums as $i => $num) {
        $complement = $target - $num;
        if (isset($mapTemp[$complement])) {
            return [$mapTemp[$complement], $i];
        }
        $mapTemp[$num] = $i;
    }
    // Problem guarantees one solution, but for safety:
    throw new Exception('No two sum solution found');
}
// Example Test
$nums = [2, 7, 11, 15];
$target = 9;
print_r(twoSumHashMap($nums, $target));  // Outputs: [0, 1]

// -------------------

/**
 * @param  array<int, int>  $nums  Array of integers
 * @param  int  $target  Target sum
 * @return array<int, int> Array containing two indices
 */
function twoSumSorted(array $nums, int $target): array
{
    $left = 0;
    $right = count($nums) - 1;

    while ($left < $right) {
        $sum = $nums[$left] + $nums[$right];
        if ($sum === $target) {
            return [$left, $right];
        } elseif ($sum < $target) {
            $left++;
        } else {
            $right--;
        }
    }
    // Problem guarantees one solution, but for safety:
    throw new Exception('No two sum solution found');
}
// Example Test
$nums = [2, 7, 11, 15];
$target = 9;
print_r(twoSumSorted($nums, $target));  // Outputs: [0, 1]

// -------------------

/**
 * @param  array<int, int>  $nums  Array of integers
 * @param  int  $target  Target sum
 * @return array<int, int> Array containing two indices
 */
function twoSumBinarySearch(array $nums, int $target): array
{
    $n = count($nums);
    for ($i = 0; $i < $n; $i++) {
        $complement = $target - $nums[$i];
        $left = $i + 1;
        $right = $n - 1;

        while ($left <= $right) {
            $mid = (int) (($left + $right) / 2);
            if ($nums[$mid] === $complement) {
                return [$i, $mid];
            } elseif ($nums[$mid] < $complement) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }
    }
    // Problem guarantees one solution, but for safety:
    throw new Exception('No two sum solution found');
}
// Example Test
$nums = [2, 7, 11, 15];
$target = 9;
print_r(twoSumBinarySearch($nums, $target));  // Outputs: [0, 1]

// -------------------
