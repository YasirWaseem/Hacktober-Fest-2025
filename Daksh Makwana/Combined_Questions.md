# Laravel and Coding Interview Questions

## 1. Event Broadcasting in Laravel

### What Is Event Broadcasting?

Event broadcasting in **Laravel** lets your app send **real-time updates** from the server (backend) to the browser (frontend).  
It’s used for features like:

- Chat messages 💬  
- Live notifications 🔔  
- Real-time dashboards 📊  

### How It Works (Step by Step)

1. **Create an Event**  
   Example: `php artisan make:event MessageSent`

2. **Enable Broadcasting**  
   In the event class, implement the `ShouldBroadcast` interface:
   ```php
   class MessageSent implements ShouldBroadcast
   {
       public function broadcastOn()
       {
           return new Channel('chat');
       }
   }
   ```

## 2. How can you implement a distributed job queue with Laravel Horizon in a microservices environment?

To use Laravel Horizon in a microservices setup, you configure a central Redis server for all services to push jobs to. Each microservice has its own Horizon instance and workers to process jobs from the shared queue. This way, you get a single dashboard to monitor all the jobs from your different services.

### Key Steps:

1.  **Centralized Redis:** Use a single Redis instance that all your microservices can connect to. This Redis server will act as the central message broker for all your jobs.
2.  **Shared Job Queue:** Configure each Laravel microservice to use the same Redis connection for its queue. In your `.env` file for each service, you would have something like:
    ```
    REDIS_HOST=your-central-redis-host
    REDIS_PASSWORD=your-redis-password
    REDIS_PORT=6379

    QUEUE_CONNECTION=redis
    ```
3.  **Horizon in Each Service:** Install Laravel Horizon in each microservice that needs to process jobs. This will give you a Horizon dashboard for each service, but they will all be looking at the same Redis server.
4.  **Unique Queue Names:** To avoid conflicts and to direct jobs to the correct microservice, use unique queue names for each service. For example, in `config/queue.php`, you can define queues like:
    ```php
    'redis' => [
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'service-a-default', // Unique name for Service A
        'retry_after' => 90,
    ],
    ```
5.  **Horizon Configuration:** In your `config/horizon.php`, configure your supervisors to listen to the correct queues for that service.
    ```php
    'defaults' => [
        'supervisor-1' => [
            'connection' => 'redis',
            'queue' => ['service-a-default'], // Listen to Service A's queue
            'balance' => 'simple',
            'processes' => 10,
            'retry_after' => 90,
        ],
    ],
    ```
6.  **Centralized Monitoring (Optional):** While each service has its own Horizon dashboard, you can create a central dashboard that aggregates information from all services. This would be a custom application that uses the Horizon API or by having a single "master" Horizon instance that is configured to monitor the queues of all other services.

This setup allows you to have a distributed job queue system where different microservices can push and pull jobs from a central queue, and you can monitor the entire system using Laravel Horizon's beautiful dashboard.

## 3. How does job chaining differ from job batching?

Give a use case where batching is preferable.

**Job Chaining** links jobs together, so the next job in the chain starts only after the previous one finishes successfully. It's like a relay race where each runner has to wait for the one before them.

**Job Batching** runs a group of jobs at the same time and lets you do something (like send an email) when all of them are done. It's like starting a whole team of runners at once and waiting for everyone to cross the finish line.

**Use Case for Batching:**

Batching is great for processing a large number of independent tasks, like resizing thousands of images. You can throw them all into a batch, let them run in parallel, and then get a notification when the entire batch is complete. This is much faster than chaining, where each image would have to be processed one after the other.

## 4. Course Schedule II

There are a total of `numCourses` courses you have to take, labeled from `0` to `numCourses - 1`.  

You are given an array `prerequisites` where `prerequisites[i] = [ai, bi]` indicates that you must take course `bi` first if you want to take course `ai`.  

Return the ordering of courses you should take to finish all courses.  
- If there are many valid answers, return any of them.  
- If it is impossible to finish all courses, return an empty array.

### Example 1

**Input:**  
numCourses = 2, prerequisites = [[1,0]]


**Output:**  
[0,1]


**Explanation:**  
To take course 1 you should have finished course 0. So the correct course order is `[0,1]`.

### Solution


```php
<?php

function findOrder($numCourses, $prerequisites) {
    $adj = array_fill(0, $numCourses, []);
    $in_degree = array_fill(0, $numCourses, 0);

    foreach ($prerequisites as $pair) {
        $course = $pair[0];
        $prereq = $pair[1];
        $adj[$prereq][] = $course;
        $in_degree[$course]++;
    }

    $queue = new SplQueue();
    for ($i = 0; $i < $numCourses; $i++) {
        if ($in_degree[$i] == 0) {
            $queue->enqueue($i);
        }
    }

    $topological_order = [];
    while (!$queue->isEmpty()) {
        $u = $queue->dequeue();
        $topological_order[] = $u;

        foreach ($adj[$u] as $v) {
            $in_degree[$v]--;
            if ($in_degree[$v] == 0) {
                $queue->enqueue($v);
            }
        }
    }

    if (count($topological_order) == $numCourses) {
        return $topological_order;
    } else {
        return [];
    }
}

?>
```

## 5. Design a WordDictionary Data Structure

Implement the `WordDictionary` class:  

- `WordDictionary()` Initializes the object.  
- `void addWord(word)` Adds `word` to the data structure; it can be matched later.  
- `bool search(word)` Returns `true` if there is any string in the data structure that matches `word`, or `false` otherwise.  
  - `word` may contain dots `.` where dots can match any letter.

### Example

**Input:**
["WordDictionary","addWord","addWord","addWord","search","search","search","search"]
[[],["bad"],["dad"],["mad"],["pad"],["bad"],[".ad"],["b.."]]


**Output:**
[null,null,null,null,false,true,true,true]


**Explanation:**  
```text
WordDictionary wordDictionary = new WordDictionary();
wordDictionary.addWord("bad");
wordDictionary.addWord("dad");
wordDictionary.addWord("mad");
wordDictionary.search("pad"); // false
wordDictionary.search("bad"); // true
wordDictionary.search(".ad"); // true
wordDictionary.search("b.."); // true
```

### Solution

```php
<?php

class TrieNode {
    public $children = [];
    public $isEndOfWord = false;
}

class WordDictionary {
    private $root;

    function __construct() {
        $this->root = new TrieNode();
    }

    function addWord($word) {
        $node = $this->root;
        for ($i = 0; $i < strlen($word); $i++) {
            $char = $word[$i];
            if (!isset($node->children[$char])) {
                $node->children[$char] = new TrieNode();
            }
            $node = $node->children[$char];
        }
        $node->isEndOfWord = true;
    }

    function search($word) {
        return $this->searchInNode($word, $this->root);
    }

    private function searchInNode($word, $node) {
        for ($i = 0; $i < strlen($word); $i++) {
            $char = $word[$i];
            if ($char == '.') {
                $remaining_word = substr($word, $i + 1);
                foreach ($node->children as $child) {
                    if ($this->searchInNode($remaining_word, $child)) {
                        return true;
                    }
                }
                return false;
            } else {
                if (!isset($node->children[$char])) {
                    return false;
                }
                $node = $node->children[$char];
            }
        }
        return $node->isEndOfWord;
    }
}

?>
```

## 6. House Robber II

You are a professional robber planning to rob houses along a street.
All houses are arranged in a circle — the first house is the neighbor of the last one.
Adjacent houses have a security system connected; it will automatically alert the police if two adjacent houses are broken into on the same night.

Given an integer array nums representing the amount of money of each house, return the maximum amount of money you can rob tonight without alerting the police.

### Example 1

**Input:**

nums = [2,3,2]

**Output:**
3

**Explanation:**
You cannot rob house 1 (money = 2) and house 3 (money = 2) because they are adjacent.

### Example 2

**Input:**

nums = [1,2,3,1]

**Output:**
4

**Explanation:**
Rob house 1 (money = 1) and house 3 (money = 3).
Total amount = 1 + 3 = 4.

### Example 3

**Input:**

nums = [1,2,3]

**Output:**
3

### Solution

```php
<?php

function rob($nums) {
    $n = count($nums);
    if ($n == 0) {
        return 0;
    }
    if ($n == 1) {
        return $nums[0];
    }

    // Scenario 1: Rob houses from 0 to n-2
    $rob1 = rob_linear(array_slice($nums, 0, $n - 1));

    // Scenario 2: Rob houses from 1 to n-1
    $rob2 = rob_linear(array_slice($nums, 1, $n - 1));

    return max($rob1, $rob2);
}

function rob_linear($nums) {
    $n = count($nums);
    if ($n == 0) {
        return 0;
    }
    if ($n == 1) {
        return $nums[0];
    }

    $dp = array_fill(0, $n, 0);
    $dp[0] = $nums[0];
    $dp[1] = max($nums[0], $nums[1]);

    for ($i = 2; $i < $n; $i++) {
        $dp[$i] = max($dp[$i - 1], $dp[$i - 2] + $nums[$i]);
    }

    return $dp[$n - 1];
}

?>
```