<?php
$pageTitle = "chmod - Commands";
$path = "../";
include($path . "inc/navbar.php");

?>
    <main class="commands">
        <h1>chmod</h1>
        <p>The chmod command is used to change the permissions (mode) of files and directories. It allows users to specify who can read, write, and execute a file or directory.</p>
        <p>Symbolic Notation: In this notation, you use symbolic characters to represent the permissions you want to add or remove. The symbolic notation consists of three parts: user class, operation, and permissions.</p>
        <p class="code">~$ chmod u+x file.txt</p>
        <p class="code">~$ chmod go-w file.txt</p>
        <p>Octal Notation: In this notation, you use octal digits to represent the permissions directly. Each permission is represented by a combination of three bits, where r(read) is represented by the bit value 4, w(write) is represented by the bit value 2, and x(execute) is represented by the bit value 1.</p>
        <p class="code">~$ chmod 755 file.txt</p>
        <a href="../commands.php"><button>Explore Text Manipulation</button></a>

    </main>

<?php

    include($path . "inc/footer.php");

?>