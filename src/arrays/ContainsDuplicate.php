<?php

declare(strict_types=1);

// $sampleArr = [1, 2, 3, 4]; // false
$sampleArr = [1, 2, 3, 3]; // true

/**
 * @param  array<int, int>  $nums  Array of integers
 * @return bool True if there are duplicates, false otherwise
 */
function containsDuplicate(array $nums): bool
{
    $seenTemp = [];
    foreach ($nums as $num) {
        if (isset($seenTemp[$num])) {
            return true; // Duplicate found
        }
        $seenTemp[$num] = true;
    }

    return false; // No duplicates found
}

var_dump(containsDuplicate($sampleArr));

/**
 * @param  array<int, int>  $nums  Array of integers
 * @return bool True if there are duplicates, false otherwise
 */
function containsDuplicateBruteForce(array $nums): bool
{
    $numsLength = count($nums);
    for ($i = 0; $i < $numsLength; $i++) {
        for ($j = $i + 1; $j < $numsLength; $j++) {
            echo 'num i vs num j';
            echo $nums[$i] . 'VS' . $nums[$j] . "\n";
            if ($nums[$i] === $nums[$j]) {
                echo 'FOUND DUPLICATE!! => ' . $nums[$i] . ' === ' . $nums[$j] . "\n";

                return true;
            }
        }
    }

    return false;
}

echo "fuck \n nigga";
var_dump(containsDuplicateBruteForce($sampleArr));
