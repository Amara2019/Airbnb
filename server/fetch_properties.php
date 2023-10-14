<?php

    include "connection.php";

    // Check the database if the user with this crerdentials already exists.
    $sqlCheckQuery = "SELECT * FROM tbl_properties ORDER BY properties ASC";
    $execQuery = $conn->query($sqlCheckQuery);


    $properties = []; // Delare an Empty array for properties


    // Loop through all the available categories in the database ussing a while loop
    while ($property = $execQuery->fetch_assoc()) {
        // Push the category into the properties array
        array_push($properties, $property);
    }


    $response = [
        'status' => 'success',
        'properties' => $properties // Pass the user information with the response
    ];

    // Echo the response
    echo json_encode($response);

?>