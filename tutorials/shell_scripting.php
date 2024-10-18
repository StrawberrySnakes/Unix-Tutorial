<?php
$pageTitle = "Shell Scripting In UNIX";
$path = "../";
include($path . "inc/navbar.php");

?>

    <main class="tutorialsMain">
        <h1>Shell Scripting</h1>
        <section>
            <h2>Writing a Shell Script</h2>
            <p>To create and run a shell script, you can use a text editor like Vim. Below is an example of a simple Python script written using Vim:</p>
            <p>VIM followed by the filename of either an existing file, or file you want to create should bring up a similar screen.</p>
            <p>Press I to enter inputting mode, and enter your code.</p>
            <p>Be sure to include the SHEBANG #!. This will let UNIX know what language you document is written in, and therefore how to go about executing your script!</p>
            <p> Once your done, press :x to exit VIM and save changes to your file.</p>
            <img src="../assets/images/python_ss.png" alt="Python Script in Vim">
        </section>
        <section>
            <h2>Changing Permissions</h2>
            <p>To execute a shell script, you need to ensure it has execute permissions. You can use the <code>chmod</code> command to change the permissions. For example:</p>
            <div class="example">
                <p><strong>chmod 755 test.py</strong></p>
                <p>This command gives read, write, and execute permissions to the owner of the file (7), and read and execute permissions to the group (5) and others (5).</p>
            </div>
            <img src="../assets/images/shellscript_permissions.png" alt="Changing Permissions with chmod">
        </section>
        <section>
            <h2>Running the Script</h2>
            <p>Once you've changed the permissions, you can execute the shell script using the following command:</p>
            <div class="example">
                <p><strong>./test.py</strong></p>
            </div>
            <img src="../assets/images/shellscriptingrun.png" alt="Running a Shell Script">
        </section>
        <a href="regex.php"><button>Regular Expressions</button></a>

    </main>


<?php

    include($path . "inc/footer.php");

?>