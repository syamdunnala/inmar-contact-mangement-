# inmar-contact-mangement-
The application basically  for managing contacts in groups  

### Pre requisites

Things one need to install to run application 

```
install XAMPP SERVER in your machine
web browsers(chrome,firefox,ms edge) 

```
In my application I used HTML,CSS3,BOOTSTRAP3,JAVASCRIPT,JQUERY,ANGULAR JS v1 IN CLIENT SIDE AND PHP FOR SERVER SIDE SERVER I USED WAS XAMPP AND DATABASE SERVER WAS MYSQL.

### Installing
 ````
step 1: Start xampp-apache,mysql server from xampp control panel.
step 2: Dump the .sql file into the mysql database .
step 3: Place the source files in the htdocs folder which present inside the xampp folder 
`````
### How to run 
````
step 1: Open the index file in the web browser(eg: localhost/rootfolder/filename)
````
### working procedure
````
step 1: If you are a new user click to register otherwise login with your valid credentials(it creates the admin table in  database named inmar )
step 2: After successful login it redirects to the corresponding dashboard page.(cookie is created here in \*login.php*\, mail is my cookie value and test 2 is my cookie name)
step 3: Click the plus button to create a new group (created groups are displayed in the  dashboard page)
 it fires the group_create.php file and stores the details in the  the group_inf table and display the required details in the corresponding page by firing \*send_group_info.php file8*\   
step 4: Add contacts in the repective groups by clicking add contact button (it fires the \*store_contact.php*\         stores the details in the contact_info table)
step 5: User can view the contact details by clicking view contacts 
step 6: User can also view the all contacts by clicking view all contacts
step 7: After performing the operations the user can logout.
 
````
## Built With
* [HTML5,CSS3,JAVASCRIPT]  - CLIENT SIDE SCRIPTING 
* [BOOTSTRAP3]             - CSS,JS FRAMEWORK
* [JQUERY, ANGULAR JSV1]   - JAVASCRIPT FRAMEWORK
* [PHP5]                   - SERVER SIDE PROGRAMMING
* [sql]                    - QUERY LANGUAGE


