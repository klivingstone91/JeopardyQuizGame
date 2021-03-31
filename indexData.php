<?php
    quizChoice();
    
    getJson();

    function quizChoice() {

    }
    function getJson() {
        $jsonContents = file_get_contents("../theQuizes/testQuiz.JSON");
        var_dump($jsonContents);
    }
?>