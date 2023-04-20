<?php
    $toDoList = [
        ["action" => "Fare la Spesa", "value" => true],
        ["action" => "Cucinare", "value" => false],
        ["action" => "Studiare", "value" => false],
        ["action" => "Dormire", "value" => false],
    ];
    
    if (isset($_POST['itemToAdd'])) {
        $value = $_POST['itemToAdd']['value'] === "true" ? true : false;
        $toDoList[] = [
            'action' => $_POST['itemToAdd']['action'],
            "value" => $value
        ];
    }
    
    header('Content-Type: application/json');
    
    echo json_encode($toDoList);
?>