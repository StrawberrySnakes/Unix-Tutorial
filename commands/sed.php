<?php
$pageTitle = "sed - Commands";
$path = "../";
include($path . "inc/navbar.php");

?>
    <main class="commands">
        <h1>sed</h1>
        <p>Sed is a stream editor, which transforms text as it's being input.</p>
        <p class=code>~$ sed 'commands' filename</p>
        <p>Substitute first matching string with other string:</p>
        <p class=code>~$ sed 's/pattern/replacement/' filename</p>
        <p>Substitute all matching strings with other string:</p>
        <p class=code>~$ sed 's/pattern/replacement/g' filename</p>
        <p>Modify files directly:</p>
        <p class=code>~$ sed -i 's/pattern/replacement/' filename</p>
        <p>Delete lines:</p>
        <p class=code>~$ sed '/pattern/d' filename</p>
        <a href="awk.php"><button>AWK</button></a>
    </main>

<?php

    include($path . "inc/footer.php");

?>