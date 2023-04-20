<?php
    $toDoList = [
        ["action" => "Fare la Spesa", "value" => true],
        ["action" => "Cucinare", "value" => false],
        ["action" => "Studiare", "value" => false],
        ["action" => "Dormire", "value" => false]
    ];
    
    if (isset($_POST['itemToAdd'])) {
        $toDoList[] = $_POST['itemToAdd'];
    }
    
    header('Content-Type: application/json');
    
    echo json_encode($toDoList);
?>