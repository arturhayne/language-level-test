
## About

The main purpose of the system is to provide a language level test for possible students from languages courses. 

A student register himself on the language course website, informing his name, e-mail, password and phone number. Then, the system sends a link to the student's e-mail that redirect him to the test. In the test, the student is presented to grammar, reading, listening and writing questions in several levels. At the final of the teste, the system will show up a report informing the student how many questions he answered right within its levels and the question type.

The questions are registred by the teachers according to the questions type, informing levels and answers.

There is a specific area to define the amount of test questions as well as the amount of questions by type and level. This area just can be accessed by system the administrator. 


## Project Model Canvas

[![](https://imagizer.imageshack.com/v2/100x75q90/921/CVHWSA.png)](https://imageshack.com/a/img921/3483/CVHWSA.png)


## Requirements
- Adding/Deleting/Updateing Question
- 4 kind of questions: grammar, reading, listening, writing
- Each objective question has just one right answer
- Each objective question has at least two answers
- The test should be created following specified levels of each type
- The test should be created with random questions
- Tests can not have questions without answers
- Result at the end of the test

## DDD
- Domain: language test
- Subdomains: Questions, Test, Test Configuration, Test report
- Bounded Context: Test (Test, Test Configuration, Test report) and Questions (Questions)
   - Edge: Issued Questions and Answered Questions

## Deliverables

1. Questions Creation Module
2. Test Creation Module
3. Answers recording Module
4. Test Configuration
5. Users roles and management
6. Updateing and deleting questions, Test Report

## Backlog

[Trello: Language Level Test](https://trello.com/b/3gaHmPEv/language-level-test)

## Future

It might be created a system version to work locally with tablets, avoiding the paper usage and show up the test result instantly.


