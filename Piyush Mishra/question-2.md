Exploratory Testing on a Demo ToDo Web Application

Application Selected: https://todomvc.com/
 (Vanilla JS ToDo App)

Testing Type: Exploratory Testing

Objective: To explore the application freely without predefined test cases, identify defects, and assess the overall usability, functionality, and accessibility.

Observations and Bugs Found:

Bug 1 – UI/Responsiveness Issue

Description: When adding a long task name (over 100 characters), the text overlaps with the "Delete" button and is not fully visible.

Type: UI / Usability

Steps to Reproduce:

Open the ToDo app.

Enter a task with 120+ characters.

Observe the overlap.

Expected Result: Text should wrap or truncate properly to avoid overlapping UI elements.

Bug 2 – Functional Issue

Description: Pressing "Enter" key does not add a task if the input contains only spaces.

Type: Functional

Steps to Reproduce:

Click on the input field.

Type spaces only and press Enter.

Observe that a blank task is not added (good), but no error or feedback is provided.

Expected Result: A validation message should appear for empty/invalid input.

Bug 3 – Usability Issue

Description: There is no confirmation or undo option when deleting a task, which can lead to accidental deletions.

Type: Usability

Steps to Reproduce:

Add a task.

Click the "Delete" (X) button.

Expected Result: A confirmation popup or undo option should be available.

Bug 4 – Accessibility Issue

Description: The app lacks proper ARIA labels for screen readers, making it difficult for visually impaired users to navigate tasks.

Type: Accessibility

Steps to Reproduce:

Use a screen reader to navigate through tasks.

Observe missing descriptive labels for buttons and inputs.

Expected Result: All interactive elements should have ARIA labels.

Bug 5 – Functional / Filtering Issue

Description: Filtering completed tasks sometimes fails if multiple tasks are completed at once; the counter does not update correctly.

Type: Functional

Steps to Reproduce:

Add multiple tasks.

Mark several tasks as completed.

Click the "Completed" filter.

Observe that the task counter does not match the filtered tasks.

Expected Result: The counter should accurately reflect the number of filtered tasks.

Conclusion:
The exploratory testing highlighted issues related to UI responsiveness, input validation, usability, accessibility, and filtering functionality. Addressing these issues would improve the overall user experience and accessibility of the application.