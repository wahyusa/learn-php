<?php

namespace App\Arrays;

class TwoSum
{
    /**
     * @param  array<int, int>  $nums
     * @param  int  $target
     * @return array<int, int>
     */
    public static function bruteForce(array $nums, int $target): array
    {
        $n = count($nums);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                if ($target === $nums[$i] + $nums[$j]) {
                    return [$i, $j];
                }
            }
        }
        throw new \Exception('No two sum solution found');
    }
}
