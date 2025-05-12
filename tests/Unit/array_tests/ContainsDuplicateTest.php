<?php

use App\Arrays\ContainsDuplicate;

// [1, 2, 3, 4]; // false
// [1, 2, 3, 3]; // true

test('BRUTE can find duplicate data in array', function (): void {
    $nums = [1, 2, 3, 3];

    $result = ContainsDuplicate::useBruteForce($nums);

    expect($result)->toBe(true);
});

test('BRUTE can not find duplicate data in array if no duplicate data', function (): void {
    $nums = [1, 2, 3, 4];

    $result = ContainsDuplicate::useBruteForce($nums);

    expect($result)->toBe(false);
});

test('HASHMAP can find duplicate data in array', function (): void {
    $nums = [1, 2, 3, 3];

    $result = ContainsDuplicate::useHashMap($nums);

    expect($result)->toBe(true);
});

test('HASHMAP can not find duplicate data in array if no duplicate data', function (): void {
    $nums = [1, 2, 3, 4];

    $result = ContainsDuplicate::useHashMap($nums);

    expect($result)->toBe(false);
});
