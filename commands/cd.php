<?php
$pageTitle = "cd - Commands";
$path = "../";
include($path . "inc/navbar.php");

?>
    <main class="commands">
        <h1>cd</h1>
        <p>The "cd" command is a fundamental command used to change the current working directory. It stands for "change directory." Here's how it's generally used:</p>
        <p class="code">~$ cd /path/to/directory<br>
            ~/path/to/directory$</p>
        <p>A path can either be absolute or relative. An absolute path starts from the root and then navigates to the file. A relative path starts from the current location and navigates from there. The previous example is absoulute because it starts with "/". The following is relative.</p>
        <p class="code">~$ cd ../path/to/directory</p>
        <p>Using "../" will back you out of your current location to your parent folder. This can be done multiple times: "../../../path/"</p>
        <a href="ls.php"><button>List</button></a>

    </main>

<?php

    include($path . "inc/footer.php");

?>