<?php
    
    if (file_exists('database.json')) {
        $string = file_get_contents('database.json');
        $toDoList = json_decode($string, true);
    } else {
        $toDoList = [];
    }
    
    
    
    if (isset($_POST['itemToAdd'])) {
        $value = $_POST['itemToAdd']['value'] === "true" ? true : false;
        $toDoList[] = [
            'action' => $_POST['itemToAdd']['action'],
            "value" => $value
        ];


        $myString = json_encode($toDoList);
        file_put_contents('database.json', $myString);
    }
    
    header('Content-Type: application/json');
    
    echo json_encode($toDoList);
?>

