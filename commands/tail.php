<?php
$pageTitle = "tail - Commands";
$path = "../";
include($path . "inc/navbar.php");

?>
    <main class="commands">
    <h1>tail</h1>
        <p>Prints the first 10 lines of a file</p>
        <p class="code">~$ tail numbers.txt<br>
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
        <p class="code">~$ tail -n 3 numbers.txt<br>
            8<br>
            9<br>
            10</p>
        <a href="sort.php"><button>Sort</button></a>
    </main>

<?php

    include($path . "inc/footer.php");

?>