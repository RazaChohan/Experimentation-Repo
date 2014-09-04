


Design Document
===============

Ready2Serve POS
===============

Table of Contents
=================
[TOC]

## Entity Relationship Diagram##

![enter image description here](https://raw.github.com/RazaChohan/ReadytoServe-POS/development/Project%20Documentation/Design%20Document/Diagrams/Extended-ERD.png)

## Database Schema ##
![enter image description here](https://raw.github.com/RazaChohan/ReadytoServe-POS/development/Project%20Documentation/Design%20Document/Diagrams/Database%20Schema%20Diagram.png)

## Usecase Diagram ##
![enter image description here](https://raw.github.com/RazaChohan/ReadytoServe-POS/development/Project%20Documentation/Design%20Document/Diagrams/Usecase%20Diagram.png)

## High Level Use Cases ##

##### **Usecase #1 (Authenticate User) ** ####
**Actors: ** Administrator, Salesperson 
**Type: ** Primary
**Description: ** All above mentioned actors will login to system after validating their unique username and password.

##### **Usecase #2 (Place Order) ** ####
**Actor: ** Salesperson
**Type: ** Primary and essential
**Description: ** Salesperson will place the order on the system by adding the items or deals asked by the customer in his/her specific order. Moreover salesperson can delete an item or deal, edit an existing order line item in order and can eventually confirms or cancels the order. 

##### **Usecase #3 (Confirm Order) ** ####
**Actor:** System
**Type:** Secondary and essential
**Description:** While placing the order the salesperson selects to confirm order. After this salesperson will not be able to edit the order. System is actually the initiator of this use case because it is initiated in the result of user selecting (initiating) to confirm his/her order during place order use case.
