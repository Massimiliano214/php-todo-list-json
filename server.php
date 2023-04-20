<?php
    $toDoList = [
        "Fare la Spesa",
        "Cucinare",
        "Studiare",
        "Dormire"
    ];
    
    if (isset($_POST['itemToAdd'])) {
        $toDoList[] = $_POST['itemToAdd'];
    }
    
    header('Content-Type: application/json');
    
    echo json_encode($toDoList);
?>