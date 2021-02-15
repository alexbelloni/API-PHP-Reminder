<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include 'autoloader.php';

$requestMethod = $_SERVER['REQUEST_METHOD'];

if (in_array($requestMethod, ["GET"])) {
    $mysqli = new mysqli($host, $username, $password, $db_name);

    if ($mysqli->connect_errno) {
        http_response_code(500);
        echo json_encode(array("error","Connect failed: %s\n", $mysqli->connect_error));
        exit();
    }

    if(isset($_REQUEST['id'])){
        $sql_command = "SELECT * FROM client WHERE id='" . $_REQUEST['id'] . "' order by ordering";
    } else {
        $sql_command = "SELECT * FROM client order by ordering";
    }    

    $result = $mysqli->query($sql_command);    

    if($result->num_rows > 0){
        $clients_arr = array();
        
        $result->fetch_all();
        
        foreach($result as $client){
            array_push($clients_arr, array(
                "id" => $client['id'],
                "name" => $client['name'],
                "image" => $client['logo_path']
                ));                 
        }
        
        // set response code - 200 OK
        http_response_code(200);
        echo json_encode($clients_arr);

    } else {  
        // set response code - 404 Not found
        http_response_code(404);

        echo json_encode(
            array("message" => "No clients found.")
        );
    }

    $result->close();
    $mysqli->close();

} else {  
    // set response code - 404 Not found
    http_response_code(404);

    echo json_encode(
        array("message" => "Method denied.")
    );
}
?>





