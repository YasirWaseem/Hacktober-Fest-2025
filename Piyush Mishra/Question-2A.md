/* 2. Exploratory testing  
    - Pick any open-source web application (e.g., a simple ToDo app or demo e-commerce site).  */

Application Chosen: TodoMVC – Vanilla JS version

Objective: Explore the web application without predefined test cases, identify bugs, and evaluate usability, functionality, and UI behavior.

Exploratory Testing Steps : 

1. Open the Application
    - Navigate to the TodoMVC Vanilla JS demo page.
    - Check if the page loads completely without errors.
    - Observe the UI layout, fonts, colors, and elements.

2. Add Tasks
    - Enter a task name in the input field and press Enter.
    - Verify that the task is added to the list.
    - Add multiple tasks and check if all appear correctly.
    - Add a blank task (no text) to see how the system behaves.

3. Edit Tasks
    - Double-click on a task to edit its name.
    - Modify the task name and press Enter.
    - Verify if the updated name is saved.
    - Try editing and leaving it blank to see validation behavior.

4. Mark Tasks as Completed
    - Click on the checkbox next to a task to mark it completed.
    - Verify that the task moves to the completed section (or gets crossed out).
    - Toggle the checkbox back to incomplete and verify.

5. Delete Tasks
    - Click on the delete (X) button for a task.
    - Verify that the task is removed from the list.
    - Attempt to delete all tasks and check if the UI handles empty lists gracefully.

6. Filter Tasks
    - Use filters: All, Active, Completed.
    - Verify tasks shown match the selected filter.
    - Check that switching filters updates the task list immediately.
7. UI/Usability Checks
    - Check responsiveness on different browser widths (mobile, tablet, desktop).
    - Verify text visibility, alignment, and button click areas.
    - Check if focus moves logically between fields and buttons.
    - Observe error messages (if any) for incorrect actions.
8. Performance Observations
    - Add 50–100 tasks to test performance.
    - Check if the UI remains responsive.