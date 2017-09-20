---
title: Architectural Corner: Introduction to CQRS
author: Georgiana
layout: post
permalink: processes/architectural-corner-introduction-to-cqrs/
excerpt: CQRS is an acronym for Command-Query Responsibility Segregation. It is an architectural pattern first discussed by Greg Young in 2010. It suggests splitting the responsibilities of reading and writing data into completely different objects. This opposes the well-known CRUD approach.
categories:
  - Processes
tags:
  - architecture
  - CQRS
---
This article appeared first on [Today Software Magazine][1] and is distributed with permission.


## What is CQRS?

Bertrand Meyer was the one who introduced the distinction between Command and Query terms, when he stated that any method should be either a Query (simply reads information) or a Command (performs an action), but not both.

CQRS is an acronym for Command-Query Responsibility Segregation. It is an architectural pattern first discussed by Greg Young in 2010. It builds on Meyer's principle and takes it forward suggesting to split the responsibilities of reading and writing data into completely different objects. This opposes the well-known CRUD approach, where the Model is being Created, Read, Updated and Deleted uniformly by the same class, with mixed methods for these actions.

## A Deeper Look

Most components fit CRUD very well, and there is no need to bend them over to fit CQRS. Let us illustrate CRUD with a very simple component which interacts directly with the end user, and which retrieves and persists data communication with the database. You can always replace both the end-user and the persistent storage with other system components. Our CRUD example uses the Repository pattern to perform the actions, which communicate with the Model. In this case, because all behaviour is in one place, the code becomes very crowded, hard to maintain, and prone to bugs in parts of the system that you would not expect.

![](/images/2016-10-10-cqrs/crud-web.jpg){.ui .fluid .image}

Let us apply the segregation between Commands and Queries on a real example dealing with employees.

```php
// uses an Employee Model
public class EmployeeService {
    public function getEmployee($id) { /* ... */}
    public function getEmployeesOnHoliday() { /* ... */}
    public function hire(Person $person, $onDate) { /* ... */}
    public function promote($id, $newRank, $fromDate) { /* ... */}
    public function giveRaise($id, $amount, $fromdate) { /* ... */}
    public function sack($id, $onDate) { /* ... */}
    public function changeAddress($id, Address $address) { /* ... */}
}
```

When using CQRS, we would have two specialised services,

```php
// keep using the same Employee Model
public class EmployeeReadService {
    public function getEmployee($id) { /* ... */}
    public function getEmployeesOnHoliday() { /* ... */}
}

// keep using the same Employee Model
public class EmployeeWriteService {
    public function hire(Person $person, $onDate) { /* ... */}
    public function promote($id, $newRank, $fromDate) { /* ... */}
    public function giveRaise($id, $amount, $fromdate) { /* ... */}
    public function sack($id, $onDate) { /* ... */}
    public function changeAddress($id, Address $address) { /* ... */}
}
```

That is the most basic separation/distinction we can perform, but it is already helping us a lot. I have represented the shared-model approach in the diagram below.

![](/images/2016-10-10-cqrs/shared-model-web.jpg){.ui .fluid .image}

The beauty of using distinct services for queries and commands is that it makes the code flexible enough to handle different models as well. Imagine how elegant your reading Model can be just because you took out all the write concerns. Similarly, for the write Model, isn't it becoming much cleaner when you do not have to deal with the data reading aspects?

![](/images/2016-10-10-cqrs/separate-models-web.jpg){.ui .fluid .image}

Let us take this one step further and completely separate the database: write in one database where data consistency is met, and read from another that is eventually consistent, but optimised for reading. Please observe how, on the right-hand side of the diagram, we took out any reference to Model. Please notice that we are retrieving DTOs directly from the Query services.

There is an added concept of Facade, quite common in today's architectures, which helps us separate the boundaries in a much cleaner way.

![](/images/2016-10-10-cqrs/cqrs-full-web.jpg){.ui .fluid .image}

## Benefits

In the CRUD approach, code can get tightly coupled very fast. One of the most frequent issues I have encountered was that making a change in the part of the code that handles a Query might result into an unwanted change of a behaviour in a Command. These situations are very difficult to handle, because what seemed a small change suddenly turns into refactoring. CQRS alleviates such issues by separating the Services, at the very least, and Services and Models for more advanced usage.

The services responsible for different behaviours can be hosted on different systems, therefore allowing them to be scaled separately. Most of the applications require intensive reads, so the Query services can be scaled individually using horizontal techniques involving tens of machines. This leaves the scaling needs of Command services to be handled by fewer independent machines.

Having different services also adds flexibility to the underlying data storage. The simple model is that of one central database to start with. However, having the freedom of writing to a consistent database and moving data to the read-intensive one can very well address a need that I have encountered quite often recently, that of a cheaper refactoring of underperforming systems. The query-able set of data can be de-normalised, to allow for the faster queries, which are typically needed.

CQRS fits very well with event-based models, as it allows event sourcing to replace the consistent data storage with an event storage. The events are then played and the query-able data is built. There is an extensive article on this topic on the cqrsinfo website.

A less intuitive advantage comes from the ease of splitting atomic tasks to be handed to developers, which helps large teams better collaborate on the codebase. While some of the CRUD components can be handed to less experienced people, the complexity of CQRS can be addressed by the senior developers and shared as knowledge, to ramp up the rest of the team.

## Downsides

Let us say you want to use separate models for the different responsibilities, the CommandModel and the QueryModel. This adds a little overhead from a maintenance perspective. When new fields are added, they need to be added in both places.

Command-Query Segregation concerns need to be addressed on a component level, not at an application level, because only some of the system components require special, non-CRUD treatment.

The best places to consider using CQRS are the boundaries between system components, where the segregation allows for specific cases to be refined even further, for example transitioned to an event sourcing approach if needed, without affecting the other parts of the application.

The CQRS modelling might be too big a mental leap for development teams, and, if employed in scenarios where it is not fit, it will cause issues. However, as stated above, roles can be better distributed and knowledge can be better shared over time.

There are more classes to be loaded, more space consumed by data when the segregated data approach is taken, and even more in the case of combining CQRS with event sourcing. Therefore, better DevOps skills are required in the team, which results in a better thought infrastructure.

### Notes
- In the above diagrams the term Model is used to signify Domain Object. Please do not confuse it with the Active Record pattern, which also carries/encodes behaviour.
- DTO stands for Data Transport Object, an object transporting data between services, but having no behaviour.

 [1]: http://todaysoftmag.com/article/1896/architectural-corner-introduction-to-cqrs
