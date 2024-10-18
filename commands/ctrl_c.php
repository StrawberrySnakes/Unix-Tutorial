<?php
$pageTitle = "CTRL + C - Commands";
$path = "../";
include($path . "inc/navbar.php");

?>
    <main class="commands">
        <h1>CTRL + C</h1>
        <p>In the command line, pressing CTRL + C is a common keyboard shortcut used to interrupt or terminate the currently running process. Here's how it's generally used:</p>
        <ol>
            <li>Interrupting a Command: When a command is running in the terminal, pressing CTRL + C sends an interrupt signal to the process, causing it to terminate. This can be helpful if a command is taking too long to execute or if you want to cancel its operation.</li><br>
            <li>Stopping a Program: If a program is running in the foreground and you want to stop it, pressing CTRL + C will often terminate the program and return you to the command prompt.</li><br>
            <li>If you're typing a command or entering input and want to cancel it, pressing CTRL + C will often clear the input line and return you to the command prompt.</li><br>
            <li>If a program or script enters an infinite loop and you need to stop it, pressing CTRL + C is a common way to break out of the loop and terminate the program.</li><br>
        </ol> 
        <a href="../commands.php">Learn about File Manipulation</button></a>

    </main>

<?php

    include($path . "inc/footer.php");

?>