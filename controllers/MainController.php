<?php

require(__DIR__ . '/../helpers/ViewHelper.php');
require(__DIR__ . '/../config.php');
require(__DIR__ . '/../models/Enquiry.php');


class MainController {

    /**
     * Render the homepage
     *
     * This is an example of how to pass
     * variables to a view using the
     * optional second parameter
     * of the ViewHelper::get method
     */
    public function renderHomePage () {
        $viewVars = [
            'title' => 'This is the homepage',
            'intro' => 'This is some intro text which is passed to the view as a variable'
        ];
        return ViewHelper::get('home', $viewVars);
    }

    /**
     * Render an error message
     *
     * @param string $error The error code / message
     *
     * @return string rendered view
     */
    public function renderError ($error) {
    
        return ViewHelper::get($error);
    }

    /**
     * This is the method which renders the enquiry form
     * The form HTML needs to be added to the
     * 'enquiry-form' view
     *
     * @return string rendered view
     */
    public function renderEnquiryForm () {
           $viewVars = [
            'title' => 'Please enter an enquiry',
        ];
        return ViewHelper::get('enquiry-form', $viewVars);
    }

    /**
     * This is the method which processes the
     * enquiry form submission
     *
     * This will need to capture the vars
     * from the POST
     * Interact with the enquiry Model
     * to crate a new database record
     * Collect all the data required
     * for the email and then
     * call a method to compose and send
     * the email
     *
     * It should then provide from feedback
     * to the user
     */
    public function processEnquiryForm() { 
        $enquiryModel = new Enquiry();
        
        // Test the DB connection
        //
        // Note - whilst this test
        // uses an echo statement to
        // output the results of this
        // test, in production code
        // you should *never* render
        // any HTML in a controller,
        // this is the job of a view
        // echo('DB Connection test successfuly - ' . $test->num_rows . ' rows returned<br />');
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email_address = $_POST["email_address"];
        $enquiry = $_POST["enquiry"];
        $response = $enquiryModel->create($first_name, $last_name, $email_address, $enquiry);
        $email = $GLOBALS['email'];
        $viewVars = [
            'id' => $response,
            'first_name' => $first_name,
            'last_name' => $response,
            'enquiry' => $enquiry,
            'title' => "Thank you",
            'intro' => 'Your enquiry has been submitted. <br/> A confirmation email has been sent to <strong>' .$email["submissionCcAddress"]. "</strong>.<br/>The unique database id for this enquiry is <strong>". $response. "</strong>."

        ];
        $to = $email["submissionToAddress"];
        $subject = "Enquiry confirmation";
        $message = "
        <html>
        <head>
        <title>New enquiry</title>
        </head>
        <body>
        <p>Id: $response</p>
        <p>First name: $first_name</p>
        <p>Last name: $last_name</p>
        <p>Email: $email_address</p>
        <p>Enquiry: $enquiry</p>
        </body>
        </html>
        ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'Cc:'. $email["submissionCcAddress"] . "\r\n";
        mail($to,$subject,$message,$headers);
        return ViewHelper::get('home', $viewVars);
    }

    /**
     * This is the method which renders the list of enquiries
     * The table HTML needs to be added to the
     * 'enquiry-table' view
     *
     * @return string rendered view
     */
    public function renderEnquiryTable() {
        
        $enquiryModel = new Enquiry();
        $enquiries = $enquiryModel->all();
        $viewVars = [
            'title' => "Enquiries",
            'enquiries' => $enquiries,
        ];
        return ViewHelper::get('enquiry-table', $viewVars);
    }

    /**
     * Render the form to edit an entry
     *
     * You will need to know which entry to
     * edit so you can use a GET param
     * to pass this in: e.g. /render-edit-enquiry-form?id=1
     */
    public function renderEditEnquiry() {
        $id = $_POST['id'];
        $enquiryModel = new Enquiry();
        $response = $enquiryModel->get($id);
        $viewVars = [
            'title' => "Edit enquiry",
            "id" => $response["id"],
            "first_name" => $response["first_name"],
            "last_name" => $response["last_name"],
            "email_address" => $response["email_address"],
            "enquiry" => $response["enquiry"],
        ];
        return ViewHelper::get('edit-enquiry-form', $viewVars);
    }

    public function processEditEnquiry() { 
        $enquiryModel = new Enquiry();
        $id =  $_POST["id"];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email_address = $_POST["email_address"];
        $enquiry = $_POST["enquiry"];
        $response = $enquiryModel->update($id, $first_name, $last_name, $email_address, $enquiry);
         $viewVars = [
            'title' => 'Thank you',
            'intro' => 'Your enquiry has been successfully updated.'
        ];
       return ViewHelper::get('home', $viewVars);
    }

    public function processDeleteEnquiry() { 
        $enquiryModel = new Enquiry();
        $id =  $_POST["id"];
        $response = $enquiryModel->delete($id);
        $viewVars = [
            'title' => 'Thank you',
            'intro' => 'The enquiry has been deleted.'
        ];
       return ViewHelper::get('home', $viewVars);
    }


}
