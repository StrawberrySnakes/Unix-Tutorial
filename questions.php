<?php
    $pageTitle = "questions";
    $path = "";
    include("inc/navbar.php");
    include("/home/iste240t10/Sites/dbConn.php");

    function sanitize($str, $length=1000) {
      $str = trim($str);
    
      // could also do a strip tags
      // strip_tags($str); 
      $str = htmlentities($str, ENT_QUOTES);
    
      return substr($str, 0, $length);
    }

    

    if(!empty($_POST["name"]) && !empty($_POST["question"])){
      // $name = $_POST["name"];
      // $question = $_POST["question"];
      $name = sanitize($_POST['name']);
      $question = sanitize($_POST["question"]);
      // $QuestionId = $_POST['id'];

      $sql = "INSERT INTO `questions` (`name`, `question`, `date`) VALUES (?, ?, now());";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('ss', $name, $question);
      $stmt->execute();
      $stmt->close();
  }
  
    $sql = "SELECT * FROM `questions` ORDER BY `id` DESC LIMIT 10";
    $result = $conn->query($sql);

?>



<main class="container">
    <section class="ask-question">
      <h2>Have a Question?</h2>
      <form id="question-form" method="POST">
        <div>
          <label for="name">Your Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div>
          <label for="question">Your Question:</label>
          <textarea id="question" name="question" value = "question" rows="10" cols="30" required></textarea>
        </div>

        <input id="submit" type="submit" value="Submit Question"/>
      </form>
    </section>
    <section class="qa-section">
      <h2>Frequently Asked Questions</h2>
      <div class="qa-pair">
        <h3 class="question">What is UNIX?</h3>
        <p class="answer">UNIX is a powerful operating system known for its multi-user, multitasking capabilities. It's a popular choice for servers and development environments due to its flexibility and command-line interface.</p>
      </div>
      <div class="qa-pair">
        <h3 class="question">How do I navigate directories in UNIX?</h3>
        <p class="answer">You can use the `cd` (change directory) command to navigate directories. For example, `cd Desktop` will change your current directory to the Desktop folder. Use `ls` (list) to view directory contents and `pwd` (print working directory) to see your current location.</p>
      </div>
      <div class="qa-pair">
        <h3 class="question">How do I create and edit files in UNIX?</h3>
        <p class="answer">There are several text editors available in UNIX, like `vi` and `nano`. Use `touch filename.txt` to create a new file and then open it in an editor using its command (e.g., `vi filename.txt`). Remember to save your changes within the editor.</p>
      </div>
      <div class="qa-pair">
        <h3 class="question">What are common UNIX permissions?</h3>
        <p class="answer">UNIX permissions control access to files and directories. There are three permission types: owner, group, and others. Each has read, write, and execute permissions represented by `rwx`. Use commands like `ls -l` to view permissions and `chmod` to modify them.</p>
      </div>
      <div class="qa-pair">
        <h3 class="question">Where can I learn more about UNIX commands?</h3>
        <p class="answer">There are many resources available online like cheat sheets and tutorials dedicated to UNIX commands. The official man pages (`man command_name`) within UNIX provide detailed information on specific commands.</p>
      </div>
    </section>


    <section id="forumSec">
    <h2>Interact by answering others questions!</h2>
    <?php
    while ($row = $result->fetch_assoc()) {
      echo "<div class='forum'>";
      echo "<div class='nameandquestion'>";
      echo "<h3>" . $row["name"] . " Asked:</h3>";
      echo "<p>" . $row["question"] . "</p>";
      echo "</div>";


    
      // Fetch and display submitted answers
      $question_id = $row["id"];
      $sql_answers = "SELECT * FROM `answers` WHERE `questionId` = ?;"; // Use prepared statement with placeholder
      $stmt = $conn->prepare($sql_answers);
      $stmt->bind_param('i', $question_id); // Bind question ID as an integer
      $stmt->execute();
      $result_answers = $stmt->get_result(); // Get results from prepared statement
    
      echo "<h3 id='communityanswers'>Community Answers:</h3>";
      while ($row_answer = $result_answers->fetch_assoc()) {
        echo "<p class='answerstoquestions'>" . $row_answer["answer"] . "</p>";
      }
    
      $stmt->close(); // Close prepared statement after use
    
        echo "<form class='answer-form' method='POST'>";
            echo "<input type='hidden' name='question_id' value='" . $row["id"] . "'>";
            echo "<div>";
            echo "<label for='answer'>Your Answer:</label><br>";
            echo "<textarea class='Qanswer' name='answer' rows='5' cols='30' required></textarea>";
            echo "</div>";
            echo "<input class='answersubmit' type='submit' value='Submit Answer'>";
            echo "</form>";

            echo "</div>";

            if (!empty($_POST["answer"])) {
              $question_id = $_POST["question_id"];
              $answer = sanitize($_POST["answer"]);
  
              // Check if the answer already exists for the question
              $sql_check_answer = "SELECT * FROM `answers` WHERE `questionId` = ? AND `answer` = ?";
              $stmt_check_answer = $conn->prepare($sql_check_answer);
              $stmt_check_answer->bind_param('is', $question_id, $answer);
              $stmt_check_answer->execute();
              $result_check_answer = $stmt_check_answer->get_result();
              $stmt_check_answer->close();
  
              if ($result_check_answer->num_rows == 0) {
                  // Insert the answer only if it doesn't already exist for the question
                  $sql_insert_answer = "INSERT INTO `answers` (`questionId`, `answer`) VALUES (?, ?)";
                  $stmt_insert_answer = $conn->prepare($sql_insert_answer);
                  $stmt_insert_answer->bind_param('is', $question_id, $answer);
                  $stmt_insert_answer->execute();
                  $stmt_insert_answer->close();
              }
          }
    }

    
      ?>
    </section>

  </main>





<?php

    include("inc/footer.php");

?>