<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include 'autoloader.php';

$requestMethod = $_SERVER['REQUEST_METHOD'];

if (in_array($requestMethod, ["GET"])) {
        // set response code - 200 OK
        http_response_code(200);
        echo json_encode(array(
            "num_projects" => $num_projects
            ));

} else {  
    // set response code - 404 Not found
    http_response_code(404);

    echo json_encode(
        array("message" => "Method denied.")
    );
}
?>





