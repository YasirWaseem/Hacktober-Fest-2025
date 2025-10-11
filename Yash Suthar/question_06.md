## 6. Dart Coding Question 3: Maximum Subarray Sum

Given an array of integers, write a Dart function to find the **maximum sum of a contiguous subarray**.

### Example:

* Input:

```dart
[-2,1,-3,4,-1,2,1,-5,4]
```

* Output:

```dart
6
```

* Explanation: `[4,-1,2,1]` has the largest sum = 6.

---

### Solution

This is a classic problem that can be solved efficiently using **Kadane's Algorithm**. The algorithm iterates through the array, keeping track of the maximum sum of a subarray ending at the current position and the overall maximum sum found so far.

The logic is as follows:
1.  Initialize `maxSoFar` and `maxEndingHere` to the first element of the array.
2.  Loop through the rest of the array.
3.  For each element, update `maxEndingHere` to be the maximum of the element itself or the element plus `maxEndingHere`.
4.  Update `maxSoFar` if `maxEndingHere` is greater than it.

Here is the Dart implementation:

```dart
import 'dart:math';

int maxSubarraySum(List<int> nums) {
  if (nums.isEmpty) {
    return 0; // Or throw an exception, based on requirements
  }

  int maxSoFar = nums[0];
  int maxEndingHere = nums[0];

  for (int i = 1; i < nums.length; i++) {
    // The maximum sum ending at the current position is either the current number
    // itself or the current number added to the previous maximum subarray sum.
    maxEndingHere = max(nums[i], maxEndingHere + nums[i]);

    // Update the overall maximum sum if the current one is greater.
    maxSoFar = max(maxSoFar, maxEndingHere);
  }

  return maxSoFar;
}

void main() {
  var nums = [-2, 1, -3, 4, -1, 2, 1, -5, 4];
  print('Input: $nums');
  print('Maximum subarray sum: ${maxSubarraySum(nums)}'); // Expected: 6

  print('---');

  var nums2 = [1];
  print('Input: $nums2');
  print('Maximum subarray sum: ${maxSubarraySum(nums2)}'); // Expected: 1

  print('---');

  var nums3 = [5, 4, -1, 7, 8];
  print('Input: $nums3');
  print('Maximum subarray sum: ${maxSubarraySum(nums3)}'); // Expected: 23
}

```
