
Ready2Serve POS
Requirment Document

Date 10-september-2014



**Project Requirement Document**

| Version |	Date |	Description |	Name	| Author |
--------- | ---- | ----------- | ---- | ------ |
| Draft 1.0 |	10-09-2014 |	The Requirement and Specification document for Ready2Serve	| Ready2Serve POS	| Coeus QA department |




####**Table of Contents**
Table of Contents	iii              <br/>
1.0	 Introduction	1                <br/>
2.0	  Business Overview	1         <br/>
3.0	  Development Environment	1 <br/>
4.0	  System Specifications	1\l "      <br/>
4.1	  Sign In	1                  <br/>
4.2	  Add/place order	2          <br/>
4.3	  View order and make changes	3  <br/>
4.3.1 Change Quantity	3                  <br/>
4.3.2 Cancel an Order Line Item	4          <br/>
4.3.3 Add an Order Line Item	4          <br/>
4.4	  Manage Items and Deals	5  <br/>
4.4.1 Add Items	5                          <br/>
4.4.2 Add Deals	6                          <br/>
4.4.3 DeActivate/Delete Items or Deals	7  <br/>
4.4.4 Change Price of Item/Deal	8          <br/>
4.4.5 Change Name of Item/Deal	8          <br/>
4.5	  View Orders	9                  <br/>
4.5.1 View All Orders	9                  <br/>
4.5.2 View Date Specific Orders	10         <br/>
4.6	   Edit Profile	11                 <br/>
4.6.1 Change Password	11                 <br/>
4.6.2 Change Username	12                 <br/>
4.7     Sign Out	13                 <br/>
5.0	Database Analysis	14         <br/>
5.1	Entity Relationship Diagram	14 <br/>
5.2	Database Schema	16                 <br/>
 




####**1.0	Introduction**
 This document contains the system requirements for Ready2Serve POS. These requirements have been derived from several sources, including meetings with client, demos given to the client by Coeus Solutions .etc. Ready2Serve POS is a console based application, it is intended to be used by the salesman and administrator in order to place orders and manage all items and deals.  
####**2.0	Business Overview**
From Business point of view this system will help to improve revenue of the restaurant “Ready2Serve” by automating many important tasks of the restaurant’s drive through. There is no dine in and delivery facilities available. So, the only way to take food is through the window at the drive through passage. And obviously that will be the single point where the customer load would be so; there should be an efficient system which handles all the purchase. 
#### **3.0	Development Environment**
**The tools and technology** which will be used for the development of this system: 
* **PHP** as a programming language and **NetBeans** as an IDE for the coding. 
* The server which we would use is **Apache**.
* The database system which will be used for the application would be the **MySQL**. 
* To design all the diagrams we have used **Visio 2013**.  <br/>
#### **4.0	System Specifications**
We have divided the Basic Flow of Ready2Serve POS in the following modules or specifications, let us evaluate them briefly through the concise description.  <br/>
#### **4.1	Sign In**

**User story title: sign in**
As a **salesman/admin** 
I want to **sign in to the system** 
so that **I can use the fully functional system**

|**S.No.**| **Pre-requisite**                     | **Acceptance criteria**             |**Status**|
|---------|:------------------------------------- |:------------------------------------|:--------:|
|1.       | salesman/admin has already an account | **When** the user requests to logIn | |
|         |**And**                                | **then**                            | |
|||||
|2.       |the user type his/her                  | ensure the account is activated     | |
|         |  valid username                       | And the control goes to main menu   | | 
|         |  valid password                       |                                     | |
|         |both consisting of varchar values	     |                                     | |
|||||
|3.       |And the user type his/her              | ensure the rejection message is displayed | |
|         |  valid username                       | And ensure user not logged in             | | 
|         |  Invalid password                     |  And prompt the user to reEnter.          | |
|         |both consisting of varchar values	     |                                           | |
|||||
|4.       |And the user type his/her              | ensure the rejection message is displayed | |
|         | Invalid username                      |   And ensure user not logged in           | |
|         | valid password                        | And prompt the user to reEnter.           | |
|         |Both consisting of varchar values      |                                           | |	 
|||||
|5.       |And the user type his/her              | ensure the rejection message is displayed | |     
|         | Invalid username                      |  And ensure user not logged in            | |
|         | Invalid password                      | And prompt the user to reEnter.	          | |
|         |Both consisting of varchar values      |                                           | | 	 




####**4.2	Add/place orders**
**User story title: Place Order**
As a **salesman**    <br/> 
I want **to place requested order for a customer**     <br/>
so that **I can generate an order for the customer and system would save this record**    <br/>

|**S.No.**| **Pre-requisite**                     | **Acceptance criteria**             |**Status**|
|---------|:------------------------------------- |:------------------------------------|:--------:|
|         |The list of items and deals is available on the screen | **When** the user requests to add order line item||
|         |**AND**                                |**Then**                             | |
|||||
|1.       |salesman enters the                    |	ensure that CMD clear all its contents | |
|         | valid index no. of the item/deal      |AND again shows the list of items and deals||
|         | valid Quantity          |AND shows the current added order line item and prompts to add more  | |
|||||
|2.       |salesman enters the                    |ensure the rejection message is displayedm | |
|         | valid index no. of the item/deal      |And prompt to reEnter the values.	         | |
|         | Invalid Quantity 	                    |                                           | |
|||||
|3.       |salesman enters the                    |ensure the rejection message is displayed  | |
|         | Invalid index no. of the item/deal    |And prompt to reEnter the values.	         | |
|         | Valid Quantity 	
|||||
|4.       |salesman enters the                    |ensure the rejection message is displayed  | | 
|         |Invalid index no. of the item/deal     |And prompt to reEnter the values.          | |
|         |Invalid Quantity 	                     |                                           | |
	

####**4.3	View order and Make Changes**
**User story title: View Order just requested by the customer**    <br/>
As a **salesman**     <br/>
I want to **review the order and make changes in that requested order for a customer**     <br/>
so that **I can generate an accurate order for the customer to avoid trouble in future.**    <br/>

|**S.No.**| **Pre-requisite**                     | **Acceptance criteria**             |**Status**|
|---------|:------------------------------------- |:------------------------------------|:--------:|
|         |The salesman is logged in              |**When** the salesman requests to make changes in the order| |
|         |**AND**	                          |**Then**                                                   | |
||||| 
|1.       |The salesman just added an order line item|	ensure the system shows the proper menu for the different options of changes.	

####**4.3.1	Change Quantity**
**User story title: Change of quantity for an order line item**    <br/>
As a **salesman**     <br/>
I want to **make changes in the quantity of an order line item just requested by the customer**     <br/>
so that **I can generate an accurate order for the customer to avoid trouble in future.**    <br/>

|**S.No.**| **Pre-requisite**                     | **Acceptance criteria**             |**Status**|
|---------|:------------------------------------- |:------------------------------------|:--------:|
||The salesman is on the section to change quantity of an item/deal|**When** the user requests to change the quantity||
|         |**AND**	                          |**Then**                              | |
|||||
|1.       |The salesman enters the valid new quantity  |ensure the updation                | |
|         |                                            |AND prompt to make further changes | |	
|||||
|2.       |The salesman enters the Invalid new quantity|ensure the rejection message is displayed | |
|         |                                            |AND prompts to reEnter	| |

####**4.3.2	Cancel an Order Line Item**
**User story title: Cancel an order line item**     <br/>
As a **salesman**     <br/>
I want to **cancel an order line item from the order just requested by the customer**     <br/>
so that **I can generate an accurate order for the customer to avoid trouble in future and system save this record**    <br/>

|**S.No.**| **Pre-requisite**                     | **Acceptance criteria**             |**Status**|
|---------|:------------------------------------- |:------------------------------------|:--------:|
|   |The salesman is on the section to cancel an order line item|**When** the user requests to cancel that item/deal||
|   |**AND**                                                    |**Then**	||
|1. |The salesman enters the valid index no. of the item/deal 	|ensure the cancellation||
|   |                                                           |AND prompt to make further changes||	
|2. |The salesman enters the Invalid index no. of the item/deal |ensure the rejection message is displayed||
|   |                                                           |AND prompts to reEnter	||

####**4.3.3	Add an order line item**
**User story title: Add an order line item in the order**     <br/>
As a **salesman**     <br/>
I want to **add more order lines item in the order just requested by the customer**    <br/>
so that **I can generate an accurate order for the customer.**    <br/>

|**S.No.**| **Pre-requisite**                     | **Acceptance criteria**             |**Status**|
|---------|:------------------------------------- |:------------------------------------|:--------:|
|         |The salesman is on the section to add more item/deal|**When** the salesman requests to add that item/deal||
|         |**AND**	                                       |**Then**  | |
|||||
|1. |The salesman enters the valid index no. of the item/deal|ensure the addition of that requested item or deal | |
|         |                                                  |AND prompt to make further changes	         | |
|||||
|2. |The salesman enters the Invalid index no. of the item/deal|ensure the rejection message is displayed        | |
|   |                                                          |AND prompts to reEnter                           | |	

####**4.4	Manage items and deals**
**User story title: Manage items and deals**    <br/>
As an **administrator**    <br/>
I want to **Manage(add, edit, inactivate) items and deals **    <br/>
so that **Items and deals could be stored in the system.**    <br/>

|**S.No.**| **Pre-requisite**                     | **Acceptance criteria**             |**Status**|
|---------|:------------------------------------- |:------------------------------------|:--------:|
|         |The admin has logged in to the system  |**When** the admin requests to manage items and deals | |
|         |**AND**	                          |**Then** | |
|||||
|1.   |admin is on the main menu |ensure that the control goes to another menu where the different options .i.e add, delete, update are available.	| |

####**4.4.1	Add items** 
**User story title: Add items**    <br/>
As an **administrator**    <br/>
I want to **add items in the database**    <br/>
so that **those specified items would store in the record of available items in the restaurant. **    <br/>

|**S.No.**| **Pre-requisite**                     | **Acceptance criteria**             |**Status**|
|---------|:------------------------------------- |:------------------------------------|:--------:|
|         |The admin is on the section to add new item details|**When** the user requests to add new item| |
|         |**AND**                                |**Then** | |	
|||||
|1.       |- admin adds the                       |ensure the success message is displayed | |
|         |    Valid item name                    |AND prompt to add more item | |
|         |    Valid unit price	                  |                            | |
|||||
|2.	  |- admin adds the                       |ensure the rejection message is displayed | |
|         |    Valid item name                    |AND prompt to reEnter | |	
|         |    InValid unit price	          |                      | |
|||||
|3.       |- admin adds the                       |ensure the rejection message is displayed
|         |    InValid item name                  |AND prompt to reEnter | |
|         |    Valid unit price                   |                      | |
|||||
|4.       |- admin adds the                       |ensure the rejection message is displayed | |
|         |    InValid item name                  |AND prompt to reEnter | |
|         |    InValid unit price	          |                      | |
	


####**4.4.2	Add deals** 
**User story title: Add deals**    <br/>
As an **administrator**    <br/>
I want to **Manage items and deals**     <br/>
so that **Items and deals could be stored in the system.**    <br/>

|**S.No.**| **Pre-requisite**                     | **Acceptance criteria**             |**Status**|
|---------|:------------------------------------- |:------------------------------------|:--------:|
|         |The admin is on the section to add new deal details|**When** the user requests to add new deal| |
|         |**AND**                                |**Then**                             | |
|||||
|1.       |- admin adds the                       |ensure the success message is displayed  | |
|         |    Valid deal name                    |AND prompt to add more deal | |	
|         |    Valid Items for that deal          |                            | |
|         |    Valid unit price	                  |                            | |
|||||
|2.       |- admin adds the                       |ensure the rejection message is displayed | |
|         |    Valid deal name                    |AND prompt to reEnter | |
|         |    Valid Items for that deal
|         |    InValid unit price	 
|||||
|3.       |- admin adds the                       |ensure the rejection message is displayed | |
|         |    InValid deal name                  |AND prompt to reEnter | |	
|         |     Valid Items for that deal         |                      | |
|         |     Valid unit price	          |                      | |
|||||
|4.       |- admin adds the                       |ensure the rejection message is displayed | |
|         |    InValid deal name                  |AND prompt to reEnter | |
|         |    Valid Items for that deal          |                      | |
|         |    InValid unit price	          |                      | |
|||||	
|5.       |- admin adds the                       |ensure the rejection message is displayed | |
|         |    Valid deal name                    |AND prompt to reEnter | |
|         |    InValid Items for that deal
|         |    Valid unit price	 
|||||	
|6.       |- admin adds the                       |ensure the rejection message is displayed | |
|         |    Valid deal name                    |AND prompt to reEnter | |	
|         |    InValid Items for that deal        |                      | |
|         |    InValid unit price	          |                      | |
|||||
|7.       |- admin adds the                       |ensure the rejection message is displayed | |
|         |    InValid deal name                  |AND prompt to reEnter | |
|         |    InValid Items for that deal        |                      | |
|         |    Valid unit price	                  |                      | |
|||||	
|8.       |- admin adds the                       |ensure the rejection message is displayed | |
|         |    InValid deal name                  |AND prompt to reEnter | |	
|         |    Valid Items for that deal          |                      | |
|         |    InValid unit price	          |                      | |

####**4.4.3	Deactivate/delete items or deals**
**User story title: Deactivate items/deals **    <br/>
As an **administrator**     <br/>
I want to **Manage items and deals **    <br/>
so that **Items and deals could be stored in the system.**    <br/>

|**S.No.**| **Pre-requisite**                     | **Acceptance criteria**             |**Status**|
|---------|:------------------------------------- |:------------------------------------|:--------:|
|    |The admin is on the section to deactivate an Item or deal|**When** the admin requests to deactivate item/deal | |
|         |**AND**                                |**Then**                             | |
|||||
|1.       |- enters the                           |ensure that the requested item/deal is deactivated | |
|         |    Valid item/deal number	          |	                                | |
|||||
|2.       |- enters the                           |ensure that the rejection message is displayed| |
|         |    InValid item/deal number	          |And prompt to reEnter | |  	

####**4.4.4	Change price of item/deal**
**User story title: Change item price**    <br/>
As an **administrator**    <br/>
I want to **Manage items and deals **    <br/>
so that **Items and deals could be stored in the system.**    <br/>

|**S.No.**| **Pre-requisite**                     | **Acceptance criteria**             |**Status**|
|---------|:------------------------------------- |:------------------------------------|:--------:|
|         |The admin is on the section to change the unit price of an Item or deal|**When** the admin requests to change the unit price of item/deal | |
|         |**AND**                                |**Then**                             | |
|||||
|1.       |- enters the                           |ensure that the unit price of requested item/deal has changed | |
|         |    Valid unit price	             	  |                      | |      
|||||
|2.       |- enters the                           |ensure that the rejection message is displayed | |
|         |    InValid unit price	          |And prompt to reEnter | |	


####**4.4.5	Change name of item/deal**
**User story title:  Change item’s name**    <br/>
As an **administrator**    <br/>
I want to **Manage items and deals **    <br/>
so that **Items and deals could be stored in the system.**    <br/>

|**S.No.**| **Pre-requisite**                     | **Acceptance criteria**             |**Status**|
|---------|:------------------------------------- |:------------------------------------|:--------:|
|         |The admin is on the section to change the name of an Item or deal | **When** the admin requests to change the name of item/deal | |
|         |**AND**                                |**Then**                  | |
|||||
|1.       |- enters the                   | ensure that the name of requested item/deal has changed | |
|         |    Valid name                 | | |		
|||||
|2.       |- enters the                   |ensure that the rejection message is displayed| |
|         |    InValid name	          |And prompt to reEnter | |	


####**4.5	View Orders**
**User story title: View Orders**    <br/>
As an **administrator**    <br/>
I want to **View Orders details **    <br/>
So that **I come to know about how many orders have been placed by the salesman.**    <br/>

|**S.No.**| **Pre-requisite**                     | **Acceptance criteria**             |**Status**|
|---------|:------------------------------------- |:------------------------------------|:--------:|
|         |The admin has logged in to the system  |**When** the admin requests to view orders | |
|         |**AND**                                |**Then**                                   | |
|||||
|1.       |admin is on the main menu 	          |ensure that the control goes to another menu where the different options .i.e view all order, view date specific order are available.| |	

####**4.5.1	View All Orders** 
**User story title: View All Orders**    <br/>
As an **administrator**    <br/>
I want to **View All Orders details **    <br/>
So that **I come to know that how many total orders till the current date have been placed by the salesman.**    <br/>

|**S.No.**| **Pre-requisite**                     | **Acceptance criteria**             |**Status**|
|---------|:------------------------------------- |:------------------------------------|:--------:|
|         |The administrator has chosen the option to view orders|**When** the user requests to view “all order” ||
| | | **Then** ensure the system load all the records in the form of pagination on the console	 | |

####**4.5.2	View Date Specific Orders**
**User story title: View Orders**    <br/>
As an **administrator**    <br/>
I want to **view orders details, placed in between specific two dates  **    <br/>
So that **I come to know about how many orders have been placed by the salesman in that specific portion of time.**    <br/>

|**S.No.**| **Pre-requisite**                     | **Acceptance criteria**             |**Status**|
|---------|:------------------------------------- |:------------------------------------|:--------:|
|       |The administrator has chosen the option to view date specific order orders|**When** the user requests to view “that order” | |
|       |**AND**                                  |**Then** | |
|1. |Admin types the date (valid format) from which he/she wants to view record in a |ensure the system load all the records in the form of pagination on the console. | |
|       |And type the date (valid format) till which he want to view record | | |  		
|||||
|2. |Admin types the date (valid format) from which he/she wants to view record in a |ensure the rejection message is displayed | | 
|   |And type the date (Invalid format) till which he want to view record |AND prompts to reEnter| | 	
|||||
|3. |Admin types the date (invalid format) from which he/she wants to view record in a |ensure the rejection message is displayed||
|   |And type the date (valid format) till which he want to view record  |AND prompts to reEnter| |	
|||||
|4. |Admin types the date (invalid format) from which he/she wants to view record in a |ensure the rejection message is displayed | | 
|   |And type the date (invalid format) till which he want to view record  	| AND prompts to reEnter| |
|||||
|5. |And admin does not mention FROM and TO dates|ensure the system load all the records of the current date in the form of pagination on the console.| |	

####**4.6	Edit Profile**
####**4.6.1	Change password**
**User story title: Change password**    <br/>
As a **salesman/admin **    <br/>
I want to **change my current password of the system **    <br/>
So that **my system get secured from unauthorized access**    <br/>

|**S.No.**| **Pre-requisite**                     | **Acceptance criteria**             |**Status**|
|---------|:------------------------------------- |:------------------------------------|:--------:|
|         |User has chosen the option to change his/her password|**When** the user requests to change password | |
|         |**AND**                                |**Then**                             | |
|||||
|1.       |- user type his/her                    |ensure the success message is displayed | |
|         |    valid new password |AND ensure that the control goes to main menu according to the user | | 
|         |    valid confirm new password | | |
|         |Where required data type for all  is varchar	| | |  
|||||
|2.       |- user type his/her |ensure the rejection message is displayed | |
|         |    valid new password | AND prompt to enter all of three again.	| |
|         |    InValid confirm new password             | | |
|         |Where required data type for all  is varchar	| | |
|||||
|3.       |- user type his/her                          |ensure the rejection message is displayed | |
|         |    InValid new password                     |AND prompt to enter all of three again.   | |	
|         |    Valid confirm new password               |                                          | |
|         |Where required data type for all  is varchar	|                                          | |
|||||
|4.       |- user type his/her                          |ensure the rejection message is displayed | |
|         |    InValid new password                     |AND prompt to enter all of three again    | |	
|         |    InValid confirm new password             |                                          | |    
|         |Where required data type for all  is varchar	|                                          | |


####** 4.6.2	Change username**
**User story title: Change username**    <br/>
As a **salesman/admin**     <br/>
I want to **change my current username of the system **    <br/>
So that **my system get secured from unauthorized access**    <br/>

|**S.No.**| **Pre-requisite**                     | **Acceptance criteria**             |**Status**|
|---------|:------------------------------------- |:------------------------------------|:--------:|
|         |User has chosen the option to change his/her username|**When** the user requests to change username| |
|         |**AND**                                |**Then**                             | |
|||||
|1.       |- user type his/her                    |ensure the success message is displayed | |
|         |    Valid new username                 |AND ensure that the control goes to main menu | |	
|         |    Valid confirm new username         |                                          | | 
|         |Where required data type for all is varchar	 |                                   | |
|||||
|2.       |- user type his/her                    |ensure the rejection message is displayed | |
|         |    Valid new username                 |AND prompt to enter all of three again.   | |	
|         |    InValid confirm new username       |                                          | |
|         |Where required data type for all is varchar	 |                                   | |
|||||
|3.       |- user type his/her                    |ensure the rejection message is displayed | |
|         |    InValid new username               |AND prompt to enter all of three again    | |	
|         |    Valid confirm new username             |                                      | |
|         |Where required data type for all is varchar|                                      | |	
|||||
|4.       |- user type his/her                        |ensure the rejection message is displayed | |
|         |    InValid new username                   |AND prompt to enter all of three again | |
|         |    InValid confirm new username           |                                       | | 
|         |Where required data type for all is varchar|                                       | |	


####**4.7	Sign Out**

**User story title: sign out **    <br/>
As a **salesman/admin**     <br/>
I want to **sign out from the system **    <br/>
So that **no any unauthorized person can use my account**    <br/>

|**S.No.**| **Pre-requisite**                     | **Acceptance criteria**             |**Status**|
|---------|:------------------------------------- |:------------------------------------|:--------:|
|         |salesman/admin account is in active form |**When** the user requests to signOut | |
|         |**AND**                                  |**Then**                              | |
|||||
|         |at every section the user has an option to log out from the system|ensure the system is deactivated| |
|         |                                         |AND the control of the CMD comes out of the system | |	

<br/>
####**5.0	Database Analysis**
The database system which we would use most preferably is the **MySQL**.  <br/>
“MySQL” have many good reasons to use in this project.  <br/> 
* Tested with a broad range of different compilers.
* Works on many different platforms.
* Provides transactional and nontransactional storage engines.
* Uses multi-layered server design with independent modules.
* Uses a very fast thread-based memory allocation system.
* Executes very fast joins using an optimized nested-loop join.
* Implements SQL functions using a highly optimized class library that should be as fast as possible.    <br/>
####**5.1	Entity Relationship Diagram**
For the entity relationship diagram we have used the Chen one model as a standard. And we have used MS Visio to design that.  <br/>
It is the logical flow of our system just at the abstract level.  <br/>
 
![enter image description here](https://raw.github.com/RazaChohan/Experimentation-Repo/sanaNewBranch/diagrams/Extended-ERD.png)

Important point about this ERD is that there is a week entity “OrderLineItem” that’s why it has marked as double lined entity.   <br/>


#####**5.2	Database Schema**
 
Here is given all the tables which we will generate through a DBscript to store information about all related contents of the system.  <br/>
That script would be used by anyone to generate data base and its tables.  <br/> 

 ![enter image description here](https://raw.github.com/RazaChohan/Experimentation-Repo/sanaNewBranch/diagrams/Database%20Schema%20Diagram.png)

As we can see that there would be five tables in the DB schema of Ready2Serve POS.  <br/>
**Person**   <br/>
person_id    <br/>
username     <br/>
password     <br/>
name         <br/>
address      <br/>
phone_number     <br/>
person_type      <br/>
**Order**           <br/>
order_id           <br/>
salesman_id           <br/>
order_datetime           <br/>
**Order_Line_Item**           <br/>
order_line_item_id           <br/>
order_id           <br/>
product_id           <br/>
unit_price           <br/>
quantity           <br/>
discount            <br/>
**Product**           <br/>
product_id           <br/>
product_type           <br/>
is_product_available           <br/>
is_product_orderable           <br/>
product_description           <br/>
product_price           <br/>
**Product_Contains_Product**           <br/>
product_id           <br/>
contained_product_id           <br/>
quantity            <br/>


**Note:**
* In person.person_type the default values stored are admin and sale
* In product.product_type the default values stored are deal and item
* Default username for salesman is “sales_man” and for admin it is “admin_man”
* Default password for salesman is “sales123” and for admin it is “admin123”
