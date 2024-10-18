<?php
$pageTitle = "rm - Commands";
$path = "../";
include($path . "inc/navbar.php");

?>
    <main class="commands">
        <h1>rm</h1>
        <p>The rm command is used to remove files and directories from the file system. It's a powerful command-line utility that allows users to delete files and directories either individually or in bulk.</p>
        <p class="code">~$ rm file.txt</p>
        <p>Remove multiple files:</p>
        <p class="code">~$ rm file1.txt file2.txt</p>
        <p>Remove a directory and its contents recursively:</p>
        <p class="code">~$ rm -r directory/</p>
        <p>Remove a directory and its contents forcefully, without prompting:</p>
        <p class="code">~$ rm -rf directory/</p>
        <a href="rmdir.php"><button>Remove Directory</button></a>

    </main>

<?php

    include($path . "inc/footer.php");

?>