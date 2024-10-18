<?php
$pageTitle = "Regular Expressions in UNIX";
$path = "../";
include($path . "inc/navbar.php");
?>

    <main class="tutorialsMain">
        <h1>Regular Expressions</h1>
        <section>
            <h2>Using Regular Expressions</h2>
            <p>Regular expressions are patterns used to match character combinations in strings. They are commonly used in text processing tasks such as searching, parsing, and replacing.</p>
            <p>You can use regular expressions with various Unix commands and programming languages, including grep, sed, awk, and Python.</p>
        </section>
        <section>
            <h2>Basic Syntax</h2>
            <p>A basic regular expression consists of literal characters and metacharacters:</p>
            <ul>
                <li><strong>Literals:</strong> Regular characters that match themselves, e.g., <code>a</code>, <code>1</code>, <code>@</code>.</li>
                <li><strong>Metacharacters:</strong> Special characters with special meanings, e.g., <code>.</code> (matches any single character), <code>*</code> (matches zero or more occurrences of the preceding character).</li>
            </ul>
        </section>
        <section>
            <h2>Using grep</h2>
            <p>The <code>grep</code> command is a powerful tool for searching text files using regular expressions. Here's an example:</p>
            <div class="example">
                <p><strong>grep 'pattern' file.txt</strong></p>
                <p>This command searches for lines in <code>file.txt</code> that match the specified pattern.</p>
            </div>
            <img src="../assets/images/grep_example.png" alt="How GREP works.">
        </section>
        <a href="networking.php"><button>Networking</button></a>

    </main>


<?php

    include($path . "inc/footer.php");

?>