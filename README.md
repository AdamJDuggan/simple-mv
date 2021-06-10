# Simple MVC Developer Challenge

The aim of this task is to create an enquiry form which saves the submitted data to a database table and then sends an email to a pre-defined address (set in the config.php file). The email should contain an ID reference to the saved data.

(For the purpose of the test you don’t need to actually send an email, just create a method which received all the required data and renders this as a view)

The code has been structured using the Model, View, Controller (MVC) paradigm so you should follow this as much as possible.
For more information see: https://medium.com/@noufel.gouirhate/create-your-own-mvc-framework-in-php-af7bd1f0ca19

### Getting started
We recommend using MAMP to run the code locally. Create a new host called simple-mvc.test and a new database called simple-mvc.
Download this repo into the root folder of your new host

### Routing
The routing is a follows:

- /render-enquiry-form
- /process-enquirt-form

### Database
An SQL file is included inside the database folder to create the enquiry table.

Database connection details are stored in the config.php file in the root.

### Controllers
There is a single controller which handles all requests. You should add your code into the processEnquiryForm() method here.

NOTE: Currently there is a call to a testConnection() method on the model inside this - this may be helpful when setting up your database.

### Models
There is an Enquiry file set up - this has a testConnection() method and placeholders for:
 
 - create()
 - get()
 
 ### Views
 There is a views directory which stores all the view files.
 Inside this is a partials directory which holds the shared header and footer. 
 
 Note: Bootstrap css is loaded in via the header
 
 
 
