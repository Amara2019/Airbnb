<?php

    include "connection.php";

    // Actual Data from Frontend
    $properties = $_POST['property'];
    $description = $_POST['description'];


    $data_insertion = $conn->query("INSERT INTO tbl_properties(properties, description) VALUES('$properties', '$description')");

    if ($data_insertion) {
        $response = [
            'status' => 'success',
            'message' => 'properties saved successfully',
        ];
    }else{
        $response = [
            'status' => 'failed',
            'message' => "An error occurred. Please try again. " . $conn->error,
        ];
    }

    // Echo the response
    echo json_encode($response);

?>