## 5. Dart Coding Question 2: Find the First Non-Repeating Character

Given a string `s`, write a Dart function that returns the **first non-repeating character**. If all characters repeat, return `null`.

### Example:

* Input:

```dart
"leetcode"
```

* Output:

```dart
'l'
```

---

### Solution

This problem can be solved efficiently by using a hash map (or a `Map` in Dart) to store the frequency of each character.

The approach is two-fold:
1.  Iterate through the string once to count the occurrences of each character and store them in a map.
2.  Iterate through the string a second time. For each character, check its count in the map. The first character with a count of `1` is our answer.

Here is the Dart implementation:

```dart
String? findFirstNonRepeatingCharacter(String s) {
  // A map to store the frequency of each character.
  var charCounts = <String, int>{};

  // 1. First pass: build the frequency map.
  for (int i = 0; i < s.length; i++) {
    String char = s[i];
    charCounts[char] = (charCounts[char] ?? 0) + 1;
  }

  // 2. Second pass: find the first character with a count of 1.
  for (int i = 0; i < s.length; i++) {
    String char = s[i];
    if (charCounts[char] == 1) {
      return char;
    }
  }

  // If no non-repeating character is found, return null.
  return null;
}

void main() {
  String s1 = "leetcode";
  print('Input: "$s1"');
  print('Output: ${findFirstNonRepeatingCharacter(s1)}'); // Expected: l

  print('---');

  String s2 = "loveleetcode";
  print('Input: "$s2"');
  print('Output: ${findFirstNonRepeatingCharacter(s2)}'); // Expected: v

  print('---');

  String s3 = "aabbcc";
  print('Input: "$s3"');
  print('Output: ${findFirstNonRepeatingCharacter(s3)}'); // Expected: null
}

```
