<?php
$pageTitle = "head - Commands";
$path = "../";
include($path . "inc/navbar.php");

?>
    <main class="commands">
    <h1>head</h1>
        <p>Prints the first 10 lines of a file:</p>
        <p class="code">~$ head numbers.txt<br>
            1<br>
            2<br>
            3<br>
            4<br>
            5<br>
            6<br>
            7<br>
            8<br>
            9<br>
            10<br></p>
        <p>Print a specific number of lines:</p>
        <p class="code">~$ head -n 3 numbers.txt<br>
            1<br>
            2<br>
            3</p>
        <a href="tail.php"><button>Tail</button></a>
    </main>

<?php

    include($path . "inc/footer.php");

?>