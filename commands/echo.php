<?php
$pageTitle = "echo - Commands";
$path = "../";
include($path . "inc/navbar.php");

?>
    <main class="commands">
        <h1>echo</h1>
        <p>Prints whatever text is given to it.</p>
        <p class=code>~$ echo "Hello, world!"<br>
            Hello, World!</p>
        <p>Use variables:</p>
        <p class=code>~$ name="Sean"<br>
            ~$ echo "Hello, $name!"<br>
            Hello, Sean!</p>
        <a href="cat.php"><button>Concatenate</button></a>
    </main>

<?php

    include($path . "inc/footer.php");

?>