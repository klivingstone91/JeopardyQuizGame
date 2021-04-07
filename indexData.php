<?php

    
    quizChoice();
    
    

    function quizChoice() {
        getJson();
    }
    function getJson() { //collects json data
        $jsonContents = file_get_contents("./theQuizes/testQuiz.JSON");
        //var_dump($jsonContents);
        //$data = json_decode($jsonContents, true);
        //var_dump($data);
        //var_dump($data["quiz"][0]["cat1"][1]["100"][0]); // This leads to the first category and the question
        //echo $data["quiz"][0]["cat1"][1]["100"][0]["q"];

        //$jsonInformation = file_get_contents("./theQuizes/testQuiz2.json");
        //var_dump($jsonInformation);
        //$data2 = json_decode($jsonInformation, true);
        //var_dump($data2["cat"]);

        $jsonInformation2 = file_get_contents("./theQuizes/testQuiz3.json");
        //var_dump($jsonInformation2);
        $data3 = json_decode($jsonInformation2, true);
        var_dump($data3);
        var_dump($data3["quizData"]["cat5-q500"]);




    }
?>