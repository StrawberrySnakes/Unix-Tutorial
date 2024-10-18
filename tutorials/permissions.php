<?php
$pageTitle = "File Management in UNIX";
$path = "../";
include($path . "inc/navbar.php");

?>

    <main class="tutorialsMain">
        <h1>File Permissions and Ownership in Linux</h1>

        <section>
            <h2>Understanding Permissions</h2>
            <p>In Linux, file permissions and ownership determine who can access and modify files. Here are some key concepts:</p>
            <ul>
                <li class="code"><strong>ls -l:</strong> List files with detailed information, including permissions and ownership.</li>
                <li class="code"><strong>chmod:</strong> Change file permissions, allowing or restricting read, write, and execute access for users, groups, and others.</li>
                <li class="code"><strong>chown:</strong> Change file ownership, transferring ownership of a file to a specific user or group.</li>
                <li class="code"><strong>chgrp:</strong> Change file group ownership, assigning a file to a specific group.</li>
            </ul>
        </section>
        <section>
            <h2>File Permission Modes</h2>
            <p>File permissions are represented by a 10-character string, where the first character indicates the file type and the next three sets of three characters represent permissions for the file owner, group, and others, respectively.</p>
            <p>The permission modes include:</p>
            <ul>
                <li><strong>Read (r):</strong> Allows reading/viewing the contents of a file.</li>
                <li><strong>Write (w):</strong> Allows modifying the contents of a file.</li>
                <li><strong>Execute (x):</strong> Allows executing the file if it's a program or script, or accessing its contents if it's a directory.</li>
            </ul>
        </section>
        <section>
            <h2>Changing Permissions and Ownership</h2>
            <p>To change file permissions, use the <code>chmod</code> command followed by the desired permission mode and the file name. For example:</p>
            <div class="code">
                <p><strong>chmod 755 filename</strong></p>
                <p>This command grants read, write, and execute permissions to the file owner (7), and read and execute permissions to the group and others (5).</p>
            </div>
            <p>To change file ownership, use the <code>chown</code> command followed by the new owner's username and the file name. For example:</p>
            <div class="code">
                <p><strong>chown user filename</strong></p>
                <p>This command changes the owner of the file to the specified user.</p>
            </div>
            <p>Similarly, you can use the <code>chgrp</code> command to change the group ownership of a file.</p>
        </section>
        <a href="system_administration.php"><button>System Administration</button></a>

    </main>


<?php

    include($path . "inc/footer.php");

?>