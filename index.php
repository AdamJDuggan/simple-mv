<?php

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

    default:
        http_response_code(404);
        echo $controller->renderError('404');
        break;
}