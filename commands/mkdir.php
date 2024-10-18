<?php
$pageTitle = "mkdir - Commands";
$path = "../";
include($path . "inc/navbar.php");

?>
    <main class="commands">
        <h1>mkdir</h1>
        <p>The mkdir command is used to create directories (folders). It's a basic command-line utility that allows users to create one or more directories at a time.</p>
        <p class="code">~$ mkdir directory_name</p>
        <p>Create multiple directories:</p>
        <p class="code">~$ mkdir dir1 dir2 dir3</p>
        <p>Create a directory with specific permissions:</p>
        <p class="code">~$ mkdir -m 755 directory_name</p>
        <a href="mv.php"><button>Move</button></a>

    </main>

<?php

    include($path . "inc/footer.php");

?>