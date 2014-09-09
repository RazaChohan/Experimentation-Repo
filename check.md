| Challenge     | How it was Solved?|
| ------------- |:-------------:|
| **Pre-requisite**
- The admin is on the section to add new item details.
`**AND**`|This issue was solved by dividing the Database into two portions one is used for read and write and another is used for reading only. One data comes into the system it is written on a database after that replicated on another database that supports only read operations.Users can read data only from the read database. |
| Chat module was another big challenge in this project. For a huge number of users it was very difficult to manage all the users and their chats. Again in this case they were making too many Ajax calls. So is the case with development of chat rooms.     | This issue was solved by opening a new socket on very conversation. This enabled the developers to reduce the ajax calls and thus reducing the amount of ajax calls and lowering the load on server.|
| The algorithm that was used for the purpose of generating combinations of bets was taking too long for that purpose.  | Initially the nested loops were 250 in iterations that was brought down to 18. Thus increasing the efficiency of the algorithm      |
