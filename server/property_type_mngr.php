<?php

    include "authorize.php";

    $action = $_POST['action'];

    if ($action == 'save_type') {
        $type = $_POST['type_input'];

        $saveQuery = "INSERT INTO types(property_type) VALUES('$type')";
        $execQuery = $conn->query($saveQuery);

        if ($execQuery) {
            header('HTTP/1.1 200');
            $response = [
                'status' => 'success',
                'posts' => $posts // Pass the array of posts with the response
            ];
        } else {
            # code...
        }
        
    }


?>