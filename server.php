<?php
    $toDoList = [
        "Fare la Spesa",
        "Cucinare",
        "Studiare",
        "Dormire"
    ];
    /*
    if (isset($_POST['list'])) {
        $toDoList[] = $_POST['list'];
    }
    */
    header('Content-Type: application/json');
    
    echo json_encode($toDoList);
?>