<?php

    
    quizChoice();
    
    

    function quizChoice() {
        getJson();
    }
    function getJson() { //collects json data
        $jsonContents = file_get_contents("./theQuizes/testQuiz.JSON");
        var_dump($jsonContents);
    }
?>