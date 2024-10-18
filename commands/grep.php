<?php
$pageTitle = "grep - Commands";
$path = "../";
include($path . "inc/navbar.php");

?>
    <main class="commands">
        <h1>grep</h1>
        <p>Grep finds all matches to a specific pattern.</p>
        <p class=code>~$ grep 'pattern' filename</p>
        <p>Ignore upper/lower cases:</p>
        <p class=code>~$ grep -i 'pattern' filename</p>
        <p>Search recursively:</p>
        <p class=code>~$ grep -r 'pattern' directory</p>
        <p>Display all lines without pattern:</p>
        <p class=code>~$ grep -v 'pattern' filename</p>
        <a href="../commands.php"><button>Back to Commands</button></a>
    </main>

<?php

    include($path . "inc/footer.php");

?>