<?php
function combinationSum3($k, $n) {
    $results = [];
    backtrack($k, $n, 1, [], $results);
    return $results;
}

function backtrack($k, $n, $start, $path, &$results) {
    if ($n < 0) return; // sum exceeded
    if (count($path) == $k && $n == 0) {
        $results[] = $path;
        return;
    }

    for ($i = $start; $i <= 9; $i++) {
        $path[] = $i;
        backtrack($k, $n - $i, $i + 1, $path, $results);
        array_pop($path); // backtrack
    }
}

// ---- Input Section ----
echo "Enter value for k: ";
$k = intval(trim(fgets(STDIN)));

echo "Enter value for n: ";
$n = intval(trim(fgets(STDIN)));

$result = combinationSum3($k, $n);
echo "All valid combinations:\n";
print_r($result);
