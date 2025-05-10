<?php

declare(strict_types=1);

function twoSum(array $nums, int $target): array
{
    $numLength = count($nums);

    for ($i = 0; $i < $numLength; $i++) {
        echo $nums[$i];
    }

    return [1, 0];
}

echo twoSum([2, 7, 11, 15], 9);
