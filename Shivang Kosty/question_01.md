
How do you evaluate a machine learning model’s performance? Explain metrics like accuracy, precision, recall, F1-score, and ROC-AUC.


Accuracy measures how often the model makes correct predictions out of all predictions. It is useful when the dataset has an equal number of positive and negative samples. However, it can be misleading in imbalanced datasets where one class dominates.

Precision tells you, out of all the samples the model predicted as positive, how many were actually positive. It is important in situations where false positives are costly. For example, in spam detection, marking a legitimate email as spam is undesirable, so higher precision is preferred.

Recall measures how many of the actual positive samples the model was able to correctly identify. It is important when missing a positive case is risky. For example, in disease detection, failing to identify a sick person is dangerous, so higher recall is preferred.

F1-score is a balance between precision and recall. It is the harmonic mean of the two and is useful when both false positives and false negatives matter. It is commonly used when the dataset is imbalanced.

ROC-AUC represents how well the model can distinguish between positive and negative classes. The ROC curve plots the true positive rate against the false positive rate at various threshold settings, and the AUC value summarizes the overall performance. A higher AUC means the model is better at ranking positives above negatives, regardless of the chosen threshold.
