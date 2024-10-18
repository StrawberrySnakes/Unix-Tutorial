<?php
$pageTitle = "UNIX Tutorials!";
$path = "";
include("inc/navbar.php");
?>

    <main id="tutorials">
    <section id="tutorialsfirst">
        <img src="assets/images/tutorialsMain.jpg" alt="UNIX Image">
        <h1>Unix Tutorials</h1>
    </section>
    
    <form class="switchform">
        <label for="beginner" onclick="toggleLabelStyles(this)">
            Beginner
            <input type="radio" id="beginner" name="toggleOptions" value="beginner" checked>
        </label> 
        
        <label for="advanced" onclick="toggleLabelStyles(this)">
            Advanced
            <input type="radio" id="advanced" name="toggleOptions" value="advanced">
        </label>

    </form>
        <section  class ="tutorial_content" id="beginner_content">
            <h2>Getting Started With UNIX</h2>
            <ul>
                <li><a href="tutorials/what_is_unix.php">What is Unix? &rarr;</a></li>
                <li><a href="tutorials/what_is_CLI.php">What is Terminal? &rarr;</a></li>
                <li><a href="tutorials/unix_commands.php">Commands for Unix Files &rarr;</a></li>
                <li><a href="tutorials/text_editors.php">Text Editors &rarr;</a></li>
            </ul>
        </section>
        <section class="tutorial_content" id="advanced_content">
            <h2>Advanced Topics of UNIX</h2>
            <ul>
                <li><a href="tutorials/shell_scripting.php">Shell Scripting &rarr;</a></li>
                <li><a href="tutorials/regex.php">Regular Expressions &rarr;</a></li>
                <li><a href="tutorials/networking.php">Networking &rarr;</a></li>
                <li><a href="tutorials/permissions.php">Permissions and Ownership &rarr;</a></li>
                <li><a href="tutorials/system_administration.php">System Administration &rarr;</a></li>
            </ul>
        </section>
    </main>

<?php

    include("inc/footer.php");

?>