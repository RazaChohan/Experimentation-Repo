


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

## Use Case Diagram ##
![enter image description here](https://raw.github.com/RazaChohan/ReadytoServe-POS/development/Project%20Documentation/Design%20Document/Diagrams/Usecase%20Diagram.png)

## High Level Use Cases ##

###Use Case #1 (Authenticate User)

**Actors:** Administrator, Salesperson 

**Type:** Primary

**Description:** All above mentioned actors will login to system after validating their unique username and password.

### Use Case #2 (Place Order)
**Actor:** Salesperson

**Type:** Primary and essential

**Description:** Salesperson will place the order on the system by adding the items or deals asked by the customer in his/her specific order. Moreover salesperson can delete an item or deal, edit an existing order line item in order and can eventually confirms or cancels the order. 

###Use Case #3 (Confirm Order) 
**Actor:** System

**Type:** Secondary and essential

**Description:** While placing the order the salesperson selects to confirm order. After this salesperson will not be able to edit the order. System is actually the initiator of this use case because it is initiated in the result of user selecting (initiating) to confirm his/her order during place order use case.

###Use Case #4 (Cancel Order)
**Actors:**  System

**Type:** Secondary and optional

**Description:** While placing the order the salesperson selects to cancel order. After this current order will be cancelled or removed. System is actually the initiator of this use case because it is initiated in the result of user selecting (initiating) to confirm his/her order in place order use case.

### Use Case #5 (Add order line Item)
**Actors:** System

**Type:** Secondary and essential

**Description:** While placing the order the salesperson selects to add an order line item that could be an item or a deal. System is actually the initiator of this use case because it is initiated in the result of user selecting (initiating) to add an item/deal in a particular order.

###Use Case #6 (Edit order line Item)
**Actors:** System

**Type:** Secondary and optional

**Description:** While placing the order the salesperson selects to edit an existing order line item in an order that could be an item or a deal. System is actually the initiator of this use case because it is initiated in the result of user selecting to add an item/deal in a particular order.

###Use Case #7 (Delete order line Item)
**Actors:** System

**Type:** Secondary and optional

**Description:** While placing the order the salesperson selects to delete an existing order line item in an order that could be an item or a deal. System is actually the initiator of this use case because it is initiated in the result of user selecting to add an item/deal in a particular order.

###Use Case #8 (Manage Products)
**Actors:** Administrator

**Type:** Primary and optional

**Description:** Admin can Add, Update/edit and delete products from the system. The initiator of this use case is administrator.

###Use Case #9 (Add Product)
**Actors:** System

**Type:** Secondary and optional

**Description:** While managing the products in the system the administrator can add a particular product. The initiator of this use case is system because it is initiated in the result of user managing the products in the system. 

###Use Case  #10 (Update Product)
**Actors:** System

**Type:** Secondary and optional

**Description:** While managing the products in the system the administrator can update or edit a particular product. The initiator of this use case is system because it is initiated in the result of user managing the products in the system. 

###Use Case #11 (Delete Product)
**Actors:** System

**Type:** Secondary and optional

**Description:** While managing the products in the system the administrator can delete a particular product from the system. The initiator of this use case is system because it is initiated in the result of user managing the products in the system. 

###Use Case #12 (Edit Account Info)
**Actors:** Administrator

**Type:** Primary and essential

**Description:** Admin or Salesperson can change their information. Initiator of this system can be any user (Salesperson or Admin). 

###Use Case #13 (View Orders)
**Actors:** Administrator

**Type:** Primary and essential

**Description:** Administrator can view the orders existing in the system. Administrator is the initiator of the system.


## Expanded Use Cases ##
