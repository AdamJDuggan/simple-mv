# Simple MVC Developer Challenge

This code has been structured using the Model, View, Controller (MVC) pattern so you should follow this as much as possible.
For more information see: https://medium.com/@noufel.gouirhate/create-your-own-mvc-framework-in-php-af7bd1f0ca19

We are looking for an understanding of how code shold be structured within this pattern. We are also keen to see the level of attention to detail in terms of presentation and code quality.

The aim of this task is to create a simple enquiry management system. This will consist of:

## Basic tasks

### An enquiry form
- An enquiry form where a user can enter their first name, last name, email address and enquiry text.
- When submitted the data from the form is saved to a database table and then a confirmation message displayed to the user.
- An email should also be sent to a pre-defined address (set in the config.php file). The email should contain the submitted data and an ID reference to its row in the database.
(For the purpose of the test you don’t need to actually send an email, just create a method which receives all the required data and renders this using a view).

### List of enquiries
- A table view which list all enquiries which have been submitted.

## Bonus tasks
If you would like to take this further you can:

### Edit an enquiry
- Add a link in the table view to 'edit' existing enquiry (Think about what the URL structure for this will need to be)
- The 'edit' link should open a form with all the existing enquiry data pre-populated in the fields. The user can update any of these and submit. This action will update the database record for that enquiry.
- Upon submission the user should be taken back to the list of enquiries with a confirmation message displayed. (Think about how you can let the view know to render this message)

## Getting started
We recommend using MAMP to run the code locally. Create a new host called simple-mvc.test and a new database called simple-mvc. Download this repo into the root folder of your new host

Please check you can run this code locally before you start the development work and let us know if you have any problems.

## Routing
The routing is handled by the index.php file. Existing routes are:

- / (Homepage)
- /render-enquiry-form
- /process-enquiry-form
- /render-enquiry-table
- /render-edit-enquiry-form

If you complete the bonus task an addition route will need to be created to process the edit.

## Database
An SQL file is included inside the database folder to create the enquiry table.

Database connection details are stored in the config.php file in the root.

## Controllers
There is a single controller which handles all requests. You should add your code into the processEnquiryForm() and renderEnquiryTable() methods here.

NOTE: Currently there is a call to a testConnection() method on the model inside this - this may be helpful when setting up your database.

## Models
There is an Enquiry model set up - this has a testConnection() method and placeholders for:

 - create()
 - get()
 - all()
 - update()
 - delete()

 ## Views
 There is a views directory which stores all the view files.

 Inside this is a partials directory which holds the shared header and footer. These should be included at the top and bottom of any new views you create.

 You can pass an array of variables to a view from the controller. For example:

 ````
$viewVars = [
    'title' => 'This is the homepage',
    'intro' => 'This is some intro text which is passed to the view as a variable'
];
return ViewHelper::get('home', $viewVars);
````

 Note: Bootstrap css (https://getbootstrap.com/docs/3.4/css/) is loaded in via the header partial. Think about how you can use this when creating the HTML for your views.



