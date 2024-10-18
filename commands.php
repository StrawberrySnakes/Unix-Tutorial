<?php
$pageTitle = "commands";
$path = "";
include($path . "inc/navbar.php");

?>

    <main id="commands" onload="">
        <section id="commandsfirst">
            <img src="assets/images/commandsMain.jpg" alt="UNIX Image">
            <h1>Commands</h1>   
        </section>

        <form class="switchform">
                    <label for="terminal" onclick="toggleLabelStyles(this)">
                        Terminal Commands 
                      <input type="radio" id="terminal" name="toggleOptions" value="terminal" checked>
                    </label> 
                  
                    <label for="fileMan" onclick="toggleLabelStyles(this)">
                        File Manipulation
                      <input type="radio" id="fileMan" name="toggleOptions" value="fileMan">
                    </label>

                    <label for="textMan" onclick="toggleLabelStyles(this)">
                        Text Manipulation
                      <input type="radio" id="textMan" name="toggleOptions" value="textMan">
                    </label>
        </form>

        <section class="tutorial_content" id="content_first">
            <h2>Common UNIX Terminal Commands</h2>
            <ul>
                <li><a href="commands/cd.php">cd - Change Directory &rarr;</a></li>
                <li><a href="commands/ls.php">ls - List &rarr;</a></li>
                <li><a href="commands/pwd.php">pwd - Print Working Directory &rarr;</a></li>
                <li><a href="commands/man.php">man - Manual &rarr;</a></li>
                <li><a href="commands/ctrl_c.php">CTRL + C - Stop &rarr;</a></li>
            </ul>
        </section>
        <section class="tutorial_content" id="content_second">
            <h2>How to Handle File Manipulation using UNIX</h2>
            <ul>
                <li><a href="commands/mkdir.php">mkdir - Make Directory &rarr;</a></li>
                <li><a href="commands/mv.php">mv - Move &rarr;</a></li>
                <li><a href="commands/cp.php">cp - Copy &rarr;</a></li>
                <li><a href="commands/rm.php">rm - Remove &rarr;</a></li>
                <li><a href="commands/rmdir.php">rmdir - Remove Directory &rarr;</a></li>
                <li><a href="commands/chmod.php">chmod - Change Mode &rarr;</a></li>
            </ul>
        </section>
        <section class="tutorial_content"  id="content_third">
            <h2>How to Handle Text Manipulation using UNIX</h2>
            <ul>
                <li><a href="commands/echo.php">echo - Echo &rarr;</a></li>
                <li><a href="commands/cat.php">cat - Concatenate &rarr;</a></li>
                <li><a href="commands/head.php">head - Head &rarr;</a></li>
                <li><a href="commands/tail.php">tail - Tail &rarr;</a></li>
                <li><a href="commands/sort.php">sort - Sort &rarr;</a></li>
                <li><a href="commands/sed.php">sed - Stream Editor &rarr;</a></li>
                <li><a href="commands/awk.php">awk - Awk &rarr;</a></li>
                <li><a href="commands/grep.php">grep - Global Regular Expression Print &rarr;</a></li>
            </ul>
        </section>
    </main>

<?php

    include($path . "inc/footer.php");

?>