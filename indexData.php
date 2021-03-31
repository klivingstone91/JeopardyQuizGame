<?php

    
    quizChoice();
    
    

    function quizChoice() {
        getJson();
    }
    function getJson() { //collects json data
        $jsonContents = file_get_contents("./theQuizes/testQuiz.JSON");
        var_dump($jsonContents);
        $data = json_decode($jsonContents, true);
        var_dump($data);
        var_dump($data["quiz"][0]["cat1"][1]["100"][0]); // This leads to the first category and the question
        echo $data["quiz"][0]["cat1"][1]["100"][0]["q"];
    }
?>