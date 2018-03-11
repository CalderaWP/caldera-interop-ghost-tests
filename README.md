Work in progress.

### What
Interoperable data representations -- IterableCollections, Entities, Models - of Ghost Inspector Acceptance tests, results, and test runs.

#### Types
__ A TestResult belongs to a TestRun, which has one test
* Test
    - A saved test
* TestRun
    - A single time a group of tests were run
* TestResult
    - A single test result for a specific test, during a specific test run

### Why?
Abstract Caldera Forms acceptance tests so we can track the results of a specific test and what is meaningful about a pass/fail.

### How?
#### Development
 * run tests and sniffs and fixes
    - `composer tests`
 * run unit tests 
    - `composer test` 
 * run code sniffs 
    - `composer sniffs`
 * run code fixes 
    - `composer fixes` 

### Also
Copyright 2018 CalderaWP. License: GNU GPL 2 or later.
