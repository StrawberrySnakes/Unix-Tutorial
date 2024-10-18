<?php
$pageTitle = "sort - Commands";
$path = "../";
include($path . "inc/navbar.php");

?>
    <main class="commands">
        <h1>sort</h1>
        <p>Will sort a dataset alphabetically.</p>
        <p class=code>~$ sort filename</p>
        <p>Sort in reversee order:</p>
        <p class=code>~$ sort -r filename</p>
        <p>Sort numerically:</p>
        <p class=code>~$ sort -n filename</p>
        <p>Sort by a field:</p>
        <p class=code>~$ sort -k 2 filename</p>
        <p>Remove duplicates:</p>
        <p class=code>~$ sort -u filename</p>
        <a href="sed.php"><button>Stream Editor</button></a>
    </main>

<?php

    include($path . "inc/footer.php");

?>