## 4. Dart Coding Question 1: Reverse a Linked List
Given a singly linked list, write a Dart function to **reverse the list in-place** and return the new head.
### Example:

* Input:
```dart
1 -> 2 -> 3 -> 4 -> 5
```

* Output:

```dart
5 -> 4 -> 3 -> 2 -> 1
```

---

### Solution

First, let's define the `Node` class for our linked list.

```dart
class Node<T> {
  T value;
  Node<T>? next;

  Node(this.value);
}
```

Now, here is the function to reverse the linked list in-place. It iterates through the list, reversing the `next` pointer of each node to point to the previous one.

```dart
Node<T>? reverseLinkedList<T>(Node<T>? head) {
  Node<T>? prev = null;
  Node<T>? current = head;
  Node<T>? nextNode;

  while (current != null) {
    nextNode = current.next; // Store the next node
    current.next = prev;     // Reverse the pointer
    prev = current;          // Move prev to the current node
    current = nextNode;      // Move to the next node in the original list
  }

  return prev; // `prev` is now the new head
}

// Helper function to print the list for verification
void printList<T>(Node<T>? head) {
  var current = head;
  var list = <T>[];
  while (current != null) {
    list.add(current.value);
    current = current.next;
  }
  print(list.join(' -> '));
}

void main() {
  // Create a sample linked list: 1 -> 2 -> 3 -> 4 -> 5
  var head = Node(1);
  head.next = Node(2);
  head.next!.next = Node(3);
  head.next!.next!.next = Node(4);
  head.next!.next!.next!.next = Node(5);

  print('Original list:');
  printList(head); // Output: 1 -> 2 -> 3 -> 4 -> 5

  // Reverse the list
  var newHead = reverseLinkedList(head);

  print('\nReversed list:');
  printList(newHead); // Output: 5 -> 4 -> 3 -> 2 -> 1
}
```

