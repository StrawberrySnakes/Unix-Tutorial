<?php
$pageTitle = "rmdir - Commands";
$path = "../";
include($path . "inc/navbar.php");

?>
    <main class="commands">
        <h1>rmdir</h1>
        <p>The rmdir command is used to remove empty directories from the file system. It allows users to delete directories only if they are empty; otherwise, it will produce an error.</p>
        <p class="code">~$ rmdir directory_name</p>
        <p>Remove multiple empty directories:</p>
        <p class="code">~$ rmdir dir1 dir2 dir3</p>
        <p>Remove a directory and its parent directory if it becomes empty:</p>
        <p class="code">~$ rmdir -p parent_dir/child_dir</p>
        <a href="chmod.php"><button>Change Mode</button></a>

    </main>

<?php

    include($path . "inc/footer.php");

?>