Questions : What are the different levels of testing (unit, integration, system, acceptance)?
Answer : 1 Unit testing : Testing the sigle line of code or single unit of code.

=>It is type of WBT
=>It is developer side process
For unit testing user habe the knowldege of code and knowledge needed . if he dont know about the code logic so he got confuse and not easy to find errors in code.
Programming language needed for unit testing.
Unit testing comes under functional testing.
To test individual units or components of the code (functions, methods, classes) to ensure they work as expected.	
To test system qualities like performance, security, usability, reliability, etc.
Checks what the system does (functionality).	
Developers during development.	
Testers or QA engineers after functional testing.
Example	: Testing if a login() function returns correct output for valid/invalid input.
Testing how fast the login page loads under heavy traffic.

2 Integration testing : testing the dataflow between two or more module .

Its main goal is to identify defects between modules, such as incorrect data flow, communication errors, or mismatched functionality.
      
=>Data transfer between modules.

=>Function calls between components.

=>Error handling across module boundaries.

Types:

1 Incremental integration testing : Incremental Integration Testing is a type of integration testing where modules are integrated and tested step by step, rather than all at once. Each module is added incrementally to the tested system, and after each addition, the combined modules are tested for correct interaction and functionality.

Top-Down approche – testing starts from top-level modules and moves downward.
Ex: lets take email example we have 3 modules 1 Compose 2 Inbox and 3 Trash in incremental integration testing we test the dataflow like Compose => Inbox => Trash.
We test the software in top to down.

Bottom-Up approche – testing starts from lower-level modules and moves upward.
Ex: lets take email example we have 3 modules 1 Compose 2 Inbox and 3 Trash in incremental integration testing we test the dataflow like Trash=>Inbox =>Compose.
We test the software in  down to top.

2 Non-Incremental integration testing : We combine whole module and perform integration testing between them.
=>we don't know about requirement and dataflow so be combine all the module and test them .

Performed By:
Typically performed by testers after unit testing and before system testing.

Example:
If an e-commerce application has separate modules for Login, Cart, and Payment, integration testing ensures that after login, the cart module receives the correct user data and the payment module processes it correctly.
=>We test the dataflow between the modules all the modules are connected and work accordingly the requirements.

3 system testing :System Testing is the process of testing a complete and fully integrated software system.
=>We test the bunch of module which is not affect customer business. 
=>It evaluates the system’s compliance with functional and non-functional requirements.
=> we test the sofware perform diffrent types of testing perform all types of testing and check the system work correctly in diffrent diffrent environment.
Purpose:
=>To validate the overall behaviour and functionality of the system as a whole, not just individual components.

Level of Testing:
=>It is a high-level testing, performed after integration testing and before acceptance testing.

Types:

1 Functional Testing – verifies system functions (e.g., login, payment).
=>We test the functionality for modules and assure all the functionality working fine in pre-production server.
=>functional testing perform by QA team.

2 Non-Functional Testing – checks performance, security, usability, reliability, etc.
=>We test the responce time how fast the software works in diffrent diffrent environment. 
=>Functional testing perform by performance engineers and QA team.


Performed By:
=>Usually dedicated testing teams (QA), developers.

Environment:
=>Conducted in an environment similar to production, using realistic data.

Example:
For an e-commerce application, system testing ensures:
=>Users can register, login, browse products, add to cart, make payment, and receive confirmation.
=>The system handles load efficiently, and security checks work correctly.

Acceptence testing :Acceptance Testing is the process of evaluating a software system to determine whether it meets the business requirements and is ready for delivery to the end user.

=>It is the final level of testing before the system goes live.
=>To verify that the software fulfills the intended business needs and is acceptable to the customer or end-user.
=>Business processes work correctly.
=>System meets user expectations.
=>It is conducted after system testing and before production deployment.
=>Acceptance Testing → validates that the system meets user/business needs.

Performed By:
Typically performed by clients, end-users, or business representatives, not developers or testers.

Types of Acceptance Testing:
Alpha testing :done by tester and developer
Beta testing :done by enduser and client.

No critical defects remain.

Example:
=>In an online banking system, acceptance testing would ensure that users can log in, transfer funds, view statements, and that all business rules (like transfer limits) are correctly enforced.
