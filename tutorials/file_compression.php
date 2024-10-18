<?php
$pageTitle = "What is Unix?";
$path = "../";
include($path . "inc/navbar.php");
?>

    <main class="tutorialsMain">
        <h1>File Compression</h1>
        <section>
            <h2>Introduction to File Compression</h2>
            <p>File compression is the process of reducing the size of one or more files to save storage space and facilitate faster transmission over networks. Unix systems offer various tools for compressing and decompressing files.</p>
        </section>
        <section>
            <h2>Common Compression Tools</h2>
            <p>Some common compression tools in Unix environments include:</p>
            <ul>
                <li><strong>tar:</strong> A utility used to create and manipulate tar archives, often combined with compression programs like gzip or bzip2.</li>
                <li><strong>gzip:</strong> A compression program that compresses files using the DEFLATE algorithm. Files compressed with gzip have a <code>.gz</code> extension.</li>
                <li><strong>bzip2:</strong> Another compression program that uses the Burrows-Wheeler algorithm. Files compressed with bzip2 have a <code>.bz2</code> extension.</li>
                <li><strong>zip:</strong> A utility for creating and manipulating zip archives, commonly used on Unix-like systems as well as Windows.</li>
            </ul>
        </section>
        <section>
            <h2>Using tar and gzip</h2>
            <p>You can use the <code>tar</code> command to create a tar archive and then compress it using <code>gzip</code>. Here's an example:</p>
            <div class="example">
                <p><strong>tar -czvf archive.tar.gz directory</strong></p>
                <p>This command creates a gzipped tar archive named <code>archive.tar.gz</code> containing the specified <code>directory</code>.</p>
            </div>
            <img src="assets/images/compression_example.png" alt="Compression.">

        </section>
    </main>


<?php

    include($path . "inc/footer.php");

?>