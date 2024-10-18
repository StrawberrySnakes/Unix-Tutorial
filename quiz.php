<?php
$pageTitle = "quiz";
$path = "";
include("inc/navbar.php");

include("/home/iste240t10/Sites/dbConn.php");

$sql="SELECT * FROM `quiz`";
$result = $conn->query($sql);
?>

<main id="quizPage">
    <section>
        <img src="assets\images\quizPageGraphic1.png" alt="quiz icon">
        <h1>Test yourself on UNIX</h1>
    </section>
    <?php
        // creates a bank of all the questions
        $questions=array();
        while ($row = $result->fetch_assoc()){
            $questions[]=$row["id"];
        }

        // adds a random quesition to the quiz and deletes it from the question bank
        $quiz=array();
        while(count($quiz)<10){
            $rng=random_int(0,count($questions)-1);
            $quiz[]=$questions[$rng];
            array_splice($questions, $rng, 1);
        }

        // iterates through all the questions and forms the questions in html
        $x=1;
        foreach($quiz as $quesID){
            // gets the data for the question
            $sql="SELECT * FROM `quiz` WHERE id=$quesID LIMIT 1";
            $result=$conn->query($sql);
            $row=$result->fetch_assoc();
            $ques=$row["question"];

            // builds the html
            echo "<fieldset class='quizQuestions'><legend>Question $x: ".$ques."</legend>";
            $id=$row["id"];
            $used=array();
            $low=1;
            // randomizes the answers
            while(count($used)<4){
                $rng=random_int($low,4);
                $ans="ERROR";
                if(!in_array($rng, $used)){
                    if($rng==1){
                        $ans=$row["answer"];
                        $low=2;
                        $used[]=1;
                        $correct="correct";
                    }else if($rng==2){
                        $ans=$row["wrong_a"];
                        $used[]=2;
                        $correct="incorrect";
                    }else if($rng==3){
                        $ans=$row["wrong_b"];
                        $used[]=3;
                        $correct="incorrect";
                    }else if($rng==4){
                        $ans=$row["wrong_c"];
                        $used[]=4;
                        $correct="incorrect";
                    }
                    // hashes the answer to help make a unique input id
                    $hash=hash('sha256', $ans);
                    echo '<div><input name="'.$id.'" id="'.$id.$hash.'" type="radio" value="'.$ans."|".$correct."|".$x.'">';
                    echo '<label for="'.$id.$hash.'" class=quizAnswer>'.$ans.'</label></div>';
                }
            }
            echo "</fieldset>";
            echo "<div id=result$x></div>";
            $x++;
        }
    ?>
    
    <div id=result></div>
    <input class="quiz_button" type="submit" onclick=displayAnswer()>
    <button class="quiz_button" onClick="window.location.reload();">Load new Quiz</button>
    <?php

        include("inc/footer.php");

    ?>
</main>
