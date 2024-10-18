<?php
$pageTitle = "ls - Commands";
$path = "../";
include($path . "inc/navbar.php");

?>
    <main class="commands">
        <h1>ls</h1>
        <p>The "ls" command is used to list files and directories within a specified directory. It's one of the most commonly used commands in the terminal.</p>
        <p class="code">~$ ls<br>
            Desktop<br>
            Documents<br>
            Downloads<br>
            Pictures<br>
            Public
            </p>
        <p>You can specify a directory as an argument to list its contents.</p>
       <p class="code">~$ ls /path/to/directory</p>
        <p>By default, "ls" does not list hidden files (files and directories whose names start with a dot "."). To include hidden files, use the "-a" or "--all" option.</p>
        <p class="code">~$ ls -a</p>
        <a href="pwd.php"><button>Print Working Directory</button></a>

    </main>

<?php

    include($path . "inc/footer.php");

?>