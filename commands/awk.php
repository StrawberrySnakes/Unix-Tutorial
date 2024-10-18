<?php
$pageTitle = "awk - Commands";
$path = "../";
include($path . "inc/navbar.php");

?>
    <main class="commands">
        <h1>awk</h1>
        <p>Awk is used for maipulating data based on text patterns. It outputs all lines from the file that match the string specified by the selection_criteria.</p>
        <p class=code>~$ awk 'selection_criteria { action }' filename</P>
        <p>Separate output by field:</p>
        <p class=code>~$ awk -F',' '{ print $1 }' filename.csv</p>
        <p>Print only parts of a line:</p>
        <p class=code>~$ awk '{ print $2, $5 }' filename</p>
        <p>Print based on conditional statements:</p>
        <p class=code>~$ awk '$3 > 100 { print $1 }' filename</p>
        <p>Print with loops:</p>
        <p class=code>~$ awk '{ if ($3 > 100) print $1; else print "Low" }' filename</p>
        <a href="grep.php"><button>Global Regular Expression Print</button></a>
    </main>

<?php

    include($path . "inc/footer.php");

?>