<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/controllers/MainController.php';

$request = $_SERVER['REQUEST_URI'];
$controller = new MainController();

switch ($request) {
    case '/' :
    case '' :
        echo $controller->renderHomePage();
        break;

    case '/render-enquiry-form':
        echo $controller->renderEnquiryForm();
        break;

    case '/process-enquiry-form':
        echo $controller->processEnquiryForm();
        break;

    case '/render-enquiry-table':
        echo $controller->renderEnquiryTable();
        break;

    case '/render-edit-enquiry-form':
        echo $controller->renderEditEnquiry();
        break;

    // Additional routes can be added here

    default:
        http_response_code(404);
        echo $controller->renderError('404');
        break;
}