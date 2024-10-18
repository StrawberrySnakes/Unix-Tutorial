<?php
$pageTitle = "What is the Terminal?";
$path = "../";
include($path . "inc/navbar.php");

?>

    <header>
    </header>
    <main class="tutorialsMain">
        <h1>What is Terminal?</h1>

        <section>
            <p>A terminal for Unix is a command-line interface (CLI) program that allows users to interact with the Unix operating system through text-based commands. It provides a way to input commands, execute programs, manage files, and perform various tasks within the Unix environment. The terminal displays text output and can be customized with different settings and configurations to suit the user's preferences and workflow.</p>
            <p><strong>Examples of Terminal Commands:</strong></p>
            <ul>
                <li><strong>ls:</strong> List files and directories in the current directory.
                    <div class="code">Example: <code>ls ~/Documents</code></div>
                </li>
                <li><strong>cd:</strong> Change directory.
                    <div class="code">Example: <code>cd /Downloads</code></div>
                </li>
                <li><strong>mkdir:</strong> Create a new directory.
                    <div class="code">Example: <code>mkdir new_directory</code></div>
                </li>
                <li><strong>rm:</strong> Remove files or directories.
                    <div class="code">Example: <code>rm file.txt</code></div>
                </li>
                <li><strong>grep:</strong> Search for patterns in files.
                    <div class="code">Example: <code>grep "pattern" file.txt</code></div>
                </li>
                <li><strong>chmod:</strong> Change file permissions.
                    <div class="code">Example: <code>chmod 755 file.sh</code></div>
                </li>
            </ul>
        </section>
        <a href="unix_commands.php"><button>Next: Commands for Unix Files</button></a>
    </main>
</body>
</html>



<?php

    include($path . "inc/footer.php");

?>