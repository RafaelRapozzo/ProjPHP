<?php

    include(__dir__ . '/../vendor/autoload.php');
    
    Use App\model\Todo;
    $todo1 = new Todo(1, 'Learn PHP');
    var_dump($todo1);
    
?>