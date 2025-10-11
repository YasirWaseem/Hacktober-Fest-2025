
## 3.

What is gradient descent, and what are its variants?
Gradient descent is an optimization technique used to minimize the error or loss of a machine learning model. It works by repeatedly adjusting the model’s parameters in the direction that reduces the loss the most. This direction is determined by the negative of the gradient, which is like the slope showing how the loss changes with respect to each parameter. By taking small steps in this direction, the model gradually improves its accuracy.

There are several variants of gradient descent:

Batch Gradient Descent calculates the gradient using the entire dataset before updating the parameters. It is stable but can be slow for large datasets.

Stochastic Gradient Descent (SGD) updates the parameters using only one training sample at a time. It is faster and adds randomness, which can help escape local minima but makes convergence noisy.

Mini-Batch Gradient Descent combines both approaches by updating the parameters using small batches of data. It is widely used because it offers a good balance between speed and stability.

There are also adaptive variants that adjust the learning rate automatically during training. Examples include Momentum, which helps accelerate learning by remembering past gradients; RMSProp, which adjusts learning rates based on recent gradients; and Adam, which combines Momentum and RMSProp and is one of the most popular optimization methods.

In simple words, gradient descent helps a model learn by slowly correcting itself, and its variants change how fast and how smoothly it learns.
---
