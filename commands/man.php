<?php
$pageTitle = "man - Commands";
$path = "../";
include($path . "inc/navbar.php");

?>
    <main class="commands">
        <h1>man</h1>
        <p>The "man" command is used to display the manual pages (documentation) of other commands, utilities, and functions available on the system.</p>
        <p class="code">~$ man {command_name}</p>
        <p>Manual pages are organized into sections. By default, "man" displays the manual page from the first section that matches the specified name. However, you can specify a particular section to view using the "-s" option.</p>
        <p class="code">~$ man -s section_number command_name</p>
        <p>You can list the available manual sections using the "-f" option.</p>
        <p class="code">~$ man -f</p>
        <a href="ctrl_c.php"><button>CTRL + C</button></a>

    </main>

<?php

    include($path . "inc/footer.php");

?>