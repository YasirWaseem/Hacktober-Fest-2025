# Questions

---

## 1.

How do you evaluate a machine learning model’s performance? Explain metrics like accuracy, precision, recall, F1-score, and ROC-AUC.


Accuracy measures how often the model makes correct predictions out of all predictions. It is useful when the dataset has an equal number of positive and negative samples. However, it can be misleading in imbalanced datasets where one class dominates.

Precision tells you, out of all the samples the model predicted as positive, how many were actually positive. It is important in situations where false positives are costly. For example, in spam detection, marking a legitimate email as spam is undesirable, so higher precision is preferred.

Recall measures how many of the actual positive samples the model was able to correctly identify. It is important when missing a positive case is risky. For example, in disease detection, failing to identify a sick person is dangerous, so higher recall is preferred.

F1-score is a balance between precision and recall. It is the harmonic mean of the two and is useful when both false positives and false negatives matter. It is commonly used when the dataset is imbalanced.

ROC-AUC represents how well the model can distinguish between positive and negative classes. The ROC curve plots the true positive rate against the false positive rate at various threshold settings, and the AUC value summarizes the overall performance. A higher AUC means the model is better at ranking positives above negatives, regardless of the chosen threshold.

---

## 2.

Explain the difference between CNN (Convolutional Neural Network) and RNN (Recurrent Neural Network).

---

## 3.

What is gradient descent, and what are its variants?

---

## 4.

What is the difference between classification and regression?

---

## 5.

What are decision trees, and how do they decide splits?

---

## 6.

Given two integers `dividend` and `divisor`, divide two integers without using multiplication, division, and mod operator.  

The integer division should truncate toward zero, which means losing its fractional part. For example, 8.345 would be truncated to 8, and -2.7335 would be truncated to -2.  

Return the quotient after dividing `dividend` by `divisor`.  

**Note:** Assume we are dealing with an environment that could only store integers within the 32-bit signed integer range: `[−2^31, 2^31 − 1]`. For this problem, if the quotient is strictly greater than `2^31 - 1`, then return `2^31 - 1`, and if the quotient is strictly less than `-2^31`, then return `-2^31`.

### Example 1:
- Input: `dividend = 10, divisor = 3`  
- Output: `3`  
- Explanation: `10 / 3 = 3.33333..` which is truncated to `3`.

### Example 2:
- Input: `dividend = 7, divisor = -3`  
- Output: `-2`  
- Explanation: `7 / -3 = -2.33333..` which is truncated to `-2`.
