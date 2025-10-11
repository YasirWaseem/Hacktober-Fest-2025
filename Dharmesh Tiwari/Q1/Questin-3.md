Question : Explain the difference between functional and non-functional testing.
Answers : Functional testing : Functional testing is a process that verifies that each function of a software application operates in conformance with the requirement specification. 
=>It focuses on the “what” the system does rather than “how” it does it.

Functional testing can be performed at different levels:

1 Unit Testing
=> Tests individual modules or components
=>Test login module for valid credentials
2 Integration Testing 
=>Tests interaction between modules	
=>Check order processing module works with payment module
3 System Testing	
=>Tests complete end-to-end system	
=>Verify online shopping flow from login to checkout
4 Sanity Testing
=>Checks critical functions work after minor changes	
=>After a fix, check login and search still work
5 Smoke Testing
=>Testin the basic and critical featureo the application	
6 Regression Testing	
=>Ensures new changes don’t break existing functionality
=>After updating payment gateway, check old transactions still work
7 User Acceptance Testing (UAT)
=>Validates if the software meets user needs
=>Business users check if the invoice report generates correctly



Advantages of Functional Testing

=>Ensures software works according to specifications.
=>Detects bugs early in the development cycle.
=>Reduces risk of system failures in production.
=>Helps improve user experience by verifying workflows.
=>Supports regression testing for ongoing maintenance.

Disadvantages

=>Does not check performance (speed, load).
=>May miss non-functional issues like usability, scalability, security.
=>Requires well-defined requirements; ambiguous specs can lead to gaps.
=>Manual functional testing can be time-consuming for large applications.

Examples of Functional Testing

=>Login Functionality:
=>Input: Valid/Invalid credentials

Expected Output: Successful login or error message

=>Shopping Cart:
=>Input: Add/remove items, apply coupon

Expected Output: Correct total price, updated cart


 Non-Functional Testing =>Non-functional testing is a type of software testing that checks how a system performs rather than what it does. It focuses on quality attributes of the system such as performance, usability, reliability, and scalability.

=>non-functional testing answers “How well does the system perform under conditions?”
=>Performance-Oriented: Measures speed, responsiveness, and stability.

Types of Non-Functional Testing Type

1 Performance Testing
=>Measures system speed, responsiveness, and stability
=>Check website response time under 1000 simultaneous users
2 Load Testing
=>Checks system behavior under expected load
=>Simulate 5000 concurrent users on e-commerce site
3 Stress Testing
=>Evaluates system limits under extreme conditions
=>Push server until it crashes to check stability
4 Usability Testing
=>Checks user-friendliness and interface	
=>Verify users can complete registration easily
5 Security Testing
=>Identifies vulnerabilities and threats
=>Check for SQL injection or unauthorized access

Tools for Non-Functional Testing
=>JMeter
=>LoadRunner	
=>Selenium

Advantages of Non-Functional Testing
=>Ensures software meets quality standards beyond functional correctness.
=>Improves user satisfaction with better usability and reliability.
=>Reduces system failures under load or stress.

Disadvantages
=>Can be time-consuming and resource-intensive.
=>Requires specialized tools and expertise.


Examples of Non-Functional Testing

=>Performance Testing: Website loads in <2 seconds for 1000 users.
=>Load Testing: Online exam portal can handle 10,000 students simultaneously.