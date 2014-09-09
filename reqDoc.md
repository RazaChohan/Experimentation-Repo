
Ready2Serve POS
Requirment Document

Date 10-september-2014




Version 	Date 	Description	Name	Author
Draft 1.0	10-09-2014	The Requirement and Specification document for Ready2Serve	Ready2Serve POS	Coeus QA department
Project Requirement Document


Table of Contents
Table of Contents	iii
1.0	 Introduction	1
2.0	  Business Overview	1
3.0	  Development Environment	1
4.0	  System Specifications	1\l "
4.1	  Sign In	1
4.2	  Add/place order	2
4.3	  View order and make changes	3
4.3.1 Change Quantity	3
4.3.2 Cancel an Order Line Item	4
4.3.3 Add an Order Line Item	4
4.4	  Manage Items and Deals	5
4.4.1 Add Items	5
4.4.2 Add Deals	6
4.4.3 DeActivate/Delete Items or Deals	7
4.4.4 Change Price of Item/Deal	8
4.4.5 Change Name of Item/Deal	8
4.5	  View Orders	9
4.5.1 View All Orders	9
4.5.2 View Date Specific Orders	10
4.6	   Edit Profile	11
4.6.1 Change Password	11
4.6.2 Change Username	12
4.7     Sign Out	13
5.0	Database Analysis	14
5.1	Entity Relationship Diagram	14
5.2	Database Schema	16





1.0	Introduction
 This document contains the system requirements for Ready2Serve POS. These requirements have been derived from several sources, including meetings with client, demos given to the client by Coeus Solutions .etc. Ready2Serve POS is a console based application, it is intended to be used by the salesman and administrator in order to place orders and manage all items and deals.  
2.0	Business Overview
From Business point of view this system will help to improve revenue of the restaurant “Ready2Serve” by automating many important tasks of the restaurant’s drive through. There is no dine in and delivery facilities available. So, the only way to take food is through the window at the drive through passage. And obviously that will be the single point where the customer load would be so; there should be an efficient system which handles all the purchase. 
3.0	Development Environment
The tools and technology which will be used for the development of this system: 
PHP as a programming language and “NetBeans” as an IDE for the coding. 
The server which we would use is “Apache”.
The database system which will be used for the application would be the “MySQL”. 
To design all the diagrams we have used “Visio 2013”.
4.0	System Specifications
We have divided the Basic Flow of Ready2Serve POS in the following modules or specifications, let us evaluate them briefly through the concise description.
4.1	Sign In

User story title: sign in
As a salesman/admin 
I want to sign in to the system 
so that I can use the fully functional system

Pre-requisite
salesman/admin has already an account 	Acceptance criteria
When the user requests to logIn 	Status
And the user type his/her 
           valid username 
           valid password 
both consisting of varchar values	Then ensure the account is activated
And the control goes to main menu	Approved
And the user type his/her
           valid username 
           Invalid password
both consisting of varchar values	Then ensure the rejection message is displayed
  And ensure user not logged in
  And prompt the user to reEnter.	
 And the user type his/her 
          Invalid username 
          valid password 
Both consisting of varchar values	When the user requests to log in 
Then ensure the rejection message is displayed
  And ensure user not logged in
  And prompt the user to reEnter.	
And the user type his/her 
          Invalid username 
          Invalid password 
Both consisting of varchar values 	When the user requests to log in 
Then ensure the rejection message is displayed
 And ensure user not logged in
 And prompt the user to reEnter.	

4.2	Add/place orders
User story title: Place Order
As a salesman 
I want to place requested order for a customer 
so that I can generate an order for the customer and system would save this record

Pre-requisite
The list of items and deals is available on the screen 
AND	Acceptance criteria
When the user requests to add order line item
Then 	status
salesman enters the 
       valid index no. of the item/deal 
       valid Quantity  	ensure that CMD clear all its contents 
AND again shows the list of items and deals 
AND shows the current added order line item and prompts to add more 	
salesman enters the 
       valid index no. of the item/deal 
       Invalid Quantity 	ensure the rejection message is displayed
And prompt to reEnter the values.	
salesman enters the 
       Invalid index no. of the item/deal 
       Valid Quantity 	ensure the rejection message is displayed
And prompt to reEnter the values.	
salesman enters the 
       Invalid index no. of the item/deal 
       Invalid Quantity 	ensure the rejection message is displayed
And prompt to reEnter the values.	

4.3	View order and Make Changes
User story title: View Order just requested by the customer
As a salesman 
I want to review the order and make changes in that requested order for a customer 
so that I can generate an accurate order for the customer to avoid trouble in future.

Pre-requisite
The salesman is logged in
AND	Acceptance criteria
When the salesman requests to make changes in the order
Then	Status 
 The salesman just added an order line item	ensure the system shows the proper menu for the different options of changes.	

4.3.1	Change Quantity
User story title: Change of quantity for an order line item
As a salesman 
I want to make changes in the quantity of an order line item just requested by the customer 
so that I can generate an accurate order for the customer to avoid trouble in future.

Pre-requisite
The salesman is on the section to change quantity of an item/deal
AND	Acceptance criteria
When the user requests to change the quantity  
Then 	Status 
The salesman enters the valid new quantity	ensure the updation
AND prompt to make further changes	
The salesman enters the Invalid new quantity	ensure the rejection message is displayed
AND prompts to reEnter	

4.3.2	Cancel an Order Line Item
User story title: Cancel an order line item 
As a salesman 
I want to cancel an order line item from the order just requested by the customer 
so that I can generate an accurate order for the customer to avoid trouble in future and system save this record

Pre-requisite
The salesman is on the section to cancel an order line item
AND	Acceptance criteria
When the user requests to cancel that item/deal
Then 	Status 
The salesman enters the valid index no. of the item/deal 	ensure the cancellation
AND prompt to make further changes	
The salesman enters the Invalid index no. of the item/deal 	ensure the rejection message is displayed
AND prompts to reEnter	

4.3.3	Add an order line item
User story title: Add an order line item in the order 
As a salesman 
I want to add more order lines item in the order just requested by the customer
so that I can generate an accurate order for the customer.

Pre-requisite
The salesman is on the section to add more item/deal
AND	Acceptance criteria
When the salesman requests to add that item/deal
Then 	Status 
The salesman enters the valid index no. of the item/deal	ensure the addition of that requested item or deal 
AND prompt to make further changes	
The salesman enters the Invalid index no. of the item/deal	ensure the rejection message is displayed
AND prompts to reEnter	

4.4	Manage items and deals
User story title: Manage items and deals
As an administrator
I want to Manage(add, edit, inactivate) items and deals 
so that Items and deals could be stored in the system.

Pre-requisite
The admin has logged in to the system
AND	Acceptance criteria
When the admin requests to manage items and deals
Then 	status
admin is on the main menu 	ensure that the control goes to another menu where the different options .i.e add, delete, update are available.	

4.4.1	Add items 
User story title: Add items 
As an administrator
I want to add items in the database
so that those specified items would store in the record of available items in the restaurant. 

Pre-requisite
The admin is on the section to add new item details.
AND	Acceptance criteria
When the user requests to add new item
Then	Status 
- admin adds the 
      Valid item name
      Valid unit price	ensure the success message is displayed 
AND prompt to add more item.	
- admin adds the 
      Valid item name
      InValid unit price	ensure the rejection message is displayed 
AND prompt to reEnter.	
- admin adds the 
      InValid item name
      Valid unit price	ensure the rejection message is displayed 
AND prompt to reEnter.	
- admin adds the 
      InValid item name
      InValid unit price	ensure the rejection message is displayed 
AND prompt to reEnter.	


4.4.2	Add deals 
User story title: Add deals
As an administrator
I want to Manage items and deals 
so that Items and deals could be stored in the system.

Pre-requisite
The admin is on the section to add new deal details.
AND	Acceptance criteria
When the user requests to add new deal
Then	Status 
- admin adds the 
      Valid deal name
      Valid Items for that deal
      Valid unit price	ensure the success message is displayed 
AND prompt to add more deal.	
- admin adds the 
      Valid deal name
      Valid Items for that deal
      InValid unit price	ensure the rejection message is displayed 
AND prompt to reEnter.	
- admin adds the 
      InValid deal name
      Valid Items for that deal
      Valid unit price	ensure the rejection message is displayed 
AND prompt to reEnter.	
- admin adds the 
      InValid deal name
      Valid Items for that deal
      InValid unit price	ensure the rejection message is displayed 
AND prompt to reEnter.	
- admin adds the 
      Valid deal name
      InValid Items for that deal
      Valid unit price	ensure the rejection message is displayed 
AND prompt to reEnter.	
- admin adds the 
      Valid deal name
      InValid Items for that deal
      InValid unit price	ensure the rejection message is displayed 
AND prompt to reEnter.	
- admin adds the 
      InValid deal name
      InValid Items for that deal
      Valid unit price	ensure the rejection message is displayed 
AND prompt to reEnter.	
- admin adds the 
      InValid deal name
      Valid Items for that deal
      InValid unit price	ensure the rejection message is displayed 
AND prompt to reEnter.	

4.4.3	Deactivate/delete items or deals
User story title: Deactivate items/deals 
As an administrator
I want to Manage items and deals 
so that Items and deals could be stored in the system.

Pre-requisite
The admin is on the section to deactivate an Item or deal
AND	Acceptance criteria
When the admin requests to deactivate item/deal
Then	Status 
- enters the 
       Valid item/deal number	ensure that the requested item/deal is deactivated 	
- enters the 
       InValid item/deal number	ensure that the rejection message is displayed
And prompt to reEnter.	

4.4.4	Change price of item/deal
User story title: Change item price
As an administrator
I want to Manage items and deals 
so that Items and deals could be stored in the system.

Pre-requisite
The admin is on the section to change the unit price of an Item or deal
AND	Acceptance criteria
When the admin requests to change the unit price of item/deal
Then	Status 
- enters the 
       Valid unit price	ensure that the unit price of requested item/deal has changed 	
- enters the 
       InValid unit price	ensure that the rejection message is displayed
And prompt to reEnter.	

4.4.5	Change name of item/deal
User story title:  Change item’s name
As an administrator
I want to Manage items and deals 
so that Items and deals could be stored in the system.

Pre-requisite
The admin is on the section to change the name of an Item or deal
AND	Acceptance criteria
When the admin requests to change the name of item/deal
Then 	Status 
- enters the 
       Valid name	ensure that the name of requested item/deal has changed 	
- enters the 
       InValid name	ensure that the rejection message is displayed
And prompt to reEnter.	

4.5	View Orders
User story title: View Orders
As an administrator
I want to View Orders details 
So that I come to know about how many orders have been placed by the salesman.

Pre-requisite
The admin has logged in to the system
AND	Acceptance criteria
When the admin requests to view orders
Then 	status
admin is on the main menu 	ensure that the control goes to another menu where the different options .i.e view all order, view date specific order are available.	

4.5.1	View All Orders 
User story title: View All Orders
As an administrator
I want to View All Orders details 
So that I come to know that how many total orders till the current date have been placed by the salesman.
Pre-requisite	Acceptance criteria 	Status
The administrator has chosen the option to view orders	When the user requests to view “all order” 
Then ensure the system load all the records in the form of pagination on the console.	

4.5.2	View Date Specific Orders
User story title: View Orders
As an administrator
I want to view orders details, placed in between specific two dates  
So that I come to know about how many orders have been placed by the salesman    in that specific portion of time.
Pre-requisite
The administrator has chosen the option to view date specific order orders
AND	Acceptance criteria 
When the user requests to view “that order”
Then 	Status
Admin types the date (valid format) from which he/she wants to view record in a 
And type the date (valid format) till which he want to view record  	ensure the system load all the records in the form of pagination on the console.	
Admin types the date (valid format) from which he/she wants to view record in a 
And type the date (Invalid format) till which he want to view record  	ensure the rejection message is displayed
AND prompts to reEnter	
Admin types the date (invalid format) from which he/she wants to view record in a 
And type the date (valid format) till which he want to view record  	ensure the rejection message is displayed
AND prompts to reEnter	
Admin types the date (invalid format) from which he/she wants to view record in a 
And type the date (invalid format) till which he want to view record  	ensure the rejection message is displayed
AND prompts to reEnter	
And admin does not mention FROM and TO dates	ensure the system load all the records of the current date in the form of pagination on the console.	

4.6	Edit Profile
4.6.1	Change password
 User story title: Change password
As a salesman/admin 
I want to change my current password of the system 
So that my system get secured from unauthorized access

Pre-requisite
User has chosen the option to change his/her password
AND	Acceptance criteria : 
When the user requests to change password
Then 	Status
  - user type his/her 
            valid current password 
            valid new password 
            valid confirm new password 
Where required data type for all  is varchar	ensure the success message is displayed  
AND ensure that the control goes to main menu according to the user	
  - user type his/her 
             Invalid current password
             valid new password
             valid confirm new password 
Where required data type for all  is varchar	ensure the rejection message is displayed
AND prompt to enter all of three again.	
 - user type his/her 
              Invalid current password 
              Invalid new password 
              Valid confirm new password 
Where required data type for all  is varchar	ensure the rejection message is displayed
AND prompt to enter all of three again.	
- user type his/her 
              Invalid current password 
              valid new password 
              Invalid confirm new password 
Where required data type for all  is varchar	ensure the rejection message is displayed
AND prompt to enter all of three again.	
- user type his/her 
               valid current password 
               Invalid new password 
               Invalid confirm new password 
Where required data type for all  is varchar 	ensure the rejection message is displayed
AND prompt to enter all of three again.	
- user type his/her 
               Valid current password 
               Invalid new password 
              Valid confirm new password 
Where required data type for all  is varchar	ensure the rejection message is displayed
AND prompt to enter all of three again.	
 - user type his/her 
             valid current password 
             valid new password 
             Invalid confirm new password 
Where required data type for all  is varchar	ensure the rejection message is displayed
AND prompt to enter all of three again.	
  - user type his/her 
             Invalid current password 
             Invalid new password 
             Invalid confirm new password 
Where required data type for all  is varchar	ensure the rejection message is displayed
AND prompt to enter all of three again.	

 4.6.2	Change username
 User story title: Change username
As a salesman/admin 
I want to change my current username of the system 
So that my system get secured from unauthorized access

Pre-requisite
User has chosen the option to change his/her username
AND	Acceptance criteria : 
When the user requests to change username
Then 	Status
  - user type his/her 
            Valid current username
            valid new username 
            Valid confirm new username 
Where required data type for all  is varchar	ensure the success message is displayed  
AND ensure that the control goes to main menu	
  - user type his/her 
             Invalid current username
             valid new username
             valid confirm new username
Where required data type for all  is varchar	ensure the rejection message is displayed
AND prompt to enter all of three again.	
 - user type his/her 
              Invalid current username 
              Invalid new username 
             valid confirm new username 
Where required data type for all  is varchar	ensure the rejection message is displayed
AND prompt to enter all of three again.	
- user type his/her 
              Invalid current username
              valid new username 
              Invalid confirm new username 
Where required data type for all  is varchar	ensure the rejection message is displayed
AND prompt to enter all of three again.	
- user type his/her 
               Valid current username 
               Invalid new username 
               Invalid confirm new username 
Where required data type for all  is varchar	ensure the rejection message is displayed
AND prompt to enter all of three again.	
- user type his/her 
               Valid current username 
               Invalid new username 
               Valid confirm new username 
Where required data type for all  is varchar	ensure the rejection message is displayed
AND prompt to enter all of three again.	
 - user type his/her 
             Valid current username 
             valid new username 
             Invalid confirm new  username 
Where required data type for all  is varchar	ensure the rejection message is displayed
AND prompt to enter all of three again.	
  - user type his/her 
             Invalid current username 
             Invalid new username 
             Invalid confirm new username 
Where required data type for all  is varchar	ensure the rejection message is displayed
AND prompt to enter all of three again.	

4.7	Sign Out

User story title: sign out 
As a salesman/admin 
I want to sign out from the system 
So that no any unauthorized person can use my account

Pre-requisite
salesman/admin account is in active form
AND	Acceptance criteria : 
When the user requests to signOut
Then 	Status
at every section the user has an option to log out from the system	ensure the system is deactivated
AND the control of the CMD comes out of the system.	

5.0	Database Analysis
The database system which we would use most preferably is the MySQL.
“MySQL” have many good reasons to use in this project. 
Tested with a broad range of different compilers.
Works on many different platforms.
Provides transactional and nontransactional storage engines.
Uses multi-layered server design with independent modules.
Uses a very fast thread-based memory allocation system.
Executes very fast joins using an optimized nested-loop join.
Implements SQL functions using a highly optimized class library that should be as fast as possible.   
5.1	Entity Relationship Diagram
For the entity relationship diagram we have used the Chen one model as a standard. And we have used MS Visio to design that.
It is the logical flow of our system just at the abstract level.
 

Important point about this ERD is that there is a week entity “OrderLineItem” that’s why it has marked as double lined entity.


5.2	Database Schema
 
Here is given all the tables which we will generate through a DBscript to store information about all related contents of the system.
That script would be used by anyone to generate data base and its tables. 
As we can see that there would be five tables in the DB schema of Ready2Serve POS.
Person
person_id
username
password
name 
address
phone_number
person_type 
Order
order_id
salesman_id
order_datetime
Order_Line_Item
order_line_item_id
order_id
product_id
unit_price
quantity
discount 
Product
product_id
product_type
is_product_available
is_product_orderable
product_description
product_price
Product_Contains_Product
product_id
contained_product_id
quantity 


Note:
In person.person_type the default values stored are admin and sale
In product.product_type the default values stored are deal and item
Default username for salesman is “sales_man” and for admin it is “admin_man”
Default password for salesman is “sales123” and for admin it is “admin123”
