<?php
$pageTitle = "What is Unix?";
$path = "../";
include($path . "inc/navbar.php");



?>
 <main class="tutorialsMain">
        <h1>Install Programs</h1>
        <section>
            <h2>Introduction to DNF</h2>
            <p>DNF, short for Dandified YUM, is the next-generation package manager for Red Hat-based Linux distributions such as Fedora and CentOS. It is used for installing, updating, and removing software packages.</p>
        </section>
        <section>
            <h2>Basic Usage</h2>
            <p>Using DNF is straightforward. Here are some common commands:</p>
            <ul>
                <li><strong>Install a Package:</strong> Use <code>dnf install</code> followed by the package name to install a package.</li>
                <li><strong>Search for a Package:</strong> Use <code>dnf search</code> followed by the keyword to search for packages matching the keyword.</li>
                <li><strong>Update Packages:</strong> Use <code>dnf update</code> to update all installed packages to the latest version.</li>
                <li><strong>Remove a Package:</strong> Use <code>dnf remove</code> followed by the package name to uninstall a package.</li>
            </ul>
        </section>
        <section>
            <h2>Installing Packages</h2>
            <p>To install a package with DNF, use the <code>install</code> command followed by the name of the package. For example:</p>
            <div class="example">
                <p><strong>dnf install package-name</strong></p>
                <p>This command installs the specified package.</p>
            </div>
            <img src="assets/images/dnf_install.png" alt="DNF Install">
        </section>
    </main>


<?php

    include($path . "inc/footer.php");

?>