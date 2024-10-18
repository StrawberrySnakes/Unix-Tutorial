<?php
$pageTitle = "cat - Commands";
$path = "../";
include($path . "inc/navbar.php");

?>
    <main class="commands">
        <h1>cat</h1>
        <p>Print the contents of a file:</p>
        <p class="code">~$ cat color.txt<br>
            Blue</p>
        <p>Print multiple files:</p>
        <p class="code">~$ cat color.txt number.txt<br>
            Blue<br>
            Three</p>
        <a href="head.php"><button>Head</button></a>
    </main>

<?php

    include($path . "inc/footer.php");

?>