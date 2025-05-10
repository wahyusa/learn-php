<?php

beforeEach(function (): void {
    require_once __DIR__.'/../../src/index.php';
});

test('two sum finds indices of numbers that add up to target', function (): void {
    $nums = [2, 7, 11, 15];
    $target = 9;

    $result = twoSumBruteForce($nums, $target);

    expect($result)->toBe([0, 1]);
});

test('two sum works with negative numbers', function (): void {
    $nums = [-1, -2, -3, -4, -5];
    $target = -7;

    $result = twoSumBruteForce($nums, $target);

    expect($result)->toBe([1, 4]);
});

test('two sum works with zero', function (): void {
    $nums = [0, 1, 2, 3];
    $target = 3;

    $result = twoSumBruteForce($nums, $target);

    expect($result)->toBe([0, 3]);
});

test('two sum throws exception when no solution exists', function (): void {
    $nums = [1, 2, 3, 4];
    $target = 10;

    expect(fn () => twoSumBruteForce($nums, $target))->toThrow(Exception::class);
});
