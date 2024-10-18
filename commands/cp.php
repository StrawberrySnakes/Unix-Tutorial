<?php
$pageTitle = "cp - Commands";
$path = "../";
include($path . "inc/navbar.php");

?>
    <main class="commands">
        <h1>cp</h1>
        <p>The cp command is used to copy files and directories. It allows users to duplicate files and directories, either within the same directory or to another location in the file system.</p>
        <p class="code">~$ cp file.txt /path/to/new/location/</p>
        <p>Copy multiple files to a directory:</p>
        <p class="code">~$ cp file1.txt file2.txt /path/to/destination/</p>
        <p>Copy a directory and its contents to a new location:</p>
        <p class="code">~$ cp -r directory /path/to/new/location/</p>
        <a href="rm.php"><button>Remove</button></a>
        
    </main>

<?php

    include($path . "inc/footer.php");

?>