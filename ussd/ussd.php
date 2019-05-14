<?php
// Reads the variables sent via POST from our gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Dear customer select the type of service you want \n";
    $response .= "1. Mobile Solutions \n";
    $response .= "2. Web development";

} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON Select the platform for development \n";
    $response .= "1. Android \n";
    $response .= "2. Ios";

} else if ($text == "2") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Dear user ".$phoneNumber."We will contact you right away";

} else if($text == "1*1") {
    // This is a second level response where the user selected 1 in the first instance


    // This is a terminal request. Note how we start the response with END
    $response = "You have selected Android";

} else if ( $text == "1*2" ) {
    // This is a second level response where the user selected 1 in the first instance

    // This is a terminal request. Note how we start the response with END
    $response = "You have selected IOS";
}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;