<?php
function findKthLargest($nums, $k) {
    $k = count($nums) - $k; // Convert to Kth smallest index
    return quickSelect($nums, 0, count($nums) - 1, $k);
}

function quickSelect(&$nums, $left, $right, $k) {
    if ($left === $right) {
        return $nums[$left];
    }

    $pivotIndex = partition($nums, $left, $right);

    if ($k === $pivotIndex) {
        return $nums[$k];
    } elseif ($k < $pivotIndex) {
        return quickSelect($nums, $left, $pivotIndex - 1, $k);
    } else {
        return quickSelect($nums, $pivotIndex + 1, $right, $k);
    }
}

function partition(&$nums, $left, $right) {
    $pivot = $nums[$right];
    $i = $left;

    for ($j = $left; $j < $right; $j++) {
        if ($nums[$j] <= $pivot) {
            [$nums[$i], $nums[$j]] = [$nums[$j], $nums[$i]];
            $i++;
        }
    }

    [$nums[$i], $nums[$right]] = [$nums[$right], $nums[$i]];
    return $i;
}

// ---- Input section ----
echo "Enter numbers separated by spaces: ";
$nums = array_map('intval', explode(' ', trim(fgets(STDIN))));

echo "Enter the value of k: ";
$k = intval(trim(fgets(STDIN)));

echo "The {$k}th largest element is: " . findKthLargest($nums, $k) . PHP_EOL;
