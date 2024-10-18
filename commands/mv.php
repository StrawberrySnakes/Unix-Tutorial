<?php
$pageTitle = "move - Commands";
$path = "../";
include($path . "inc/navbar.php");

?>
    <main class="commands">
        <h1>mv</h1>
        <p>The mv command is used to move files within the UNIX filesystem. </p>
        <p class="code">~$ mv [source_file_name(s)] [Destination_file_name] </p>
        <p>For Instance:</p>
        <p class="code">~$ mv test.txt testdirectory</p>
        <p>You can also move multiple files at the same time:</p>
        <p class="code">~$ mv [source_file_name_1] [source_file_name_2] [source_file_name_ .....] [Destination_path]</p>
        <a href="cp.php"><button>Copy</button></a>

    </main>

<?php

    include($path . "inc/footer.php");

?>