<?php
$pageTitle = "Networking in UNIX";
$path = "../";
include($path . "inc/navbar.php");



?>

    <main class="tutorialsMain">
        <h1>Network Diagnostics and Properties in Linux</h1>

        <section>
            <h2>Diagnosing Network Issues</h2>
            <p>When troubleshooting network issues in Linux, you can use various commands to gather information and diagnose problems:</p>
            <ul>
                <li><strong>ping:</strong> Test connectivity to a remote host by sending ICMP echo requests.</li>
                <p class="code">Ping 127.0.0.1</p>
                <li><strong>traceroute:</strong> Trace the path packets take to reach a destination.</li>
                <p class="code">traceroute google.com</p>
                <li><strong>ifconfig or ip addr:</strong> View network interface information, including IP addresses, subnet masks, and hardware addresses.</li>
                <p class="code">ifconfig <br>ens160: flags=4163<UP,BROADCAST,RUNNING,MULTICAST>  mtu 1500
        inet 192.168.205.128  netmask 255.255.255.0  broadcast 192.168.205.255
 </p>
                <li><strong>netstat:</strong> Display network statistics, including active connections, routing tables, and interface statistics.</li>
                <p class="code">netstat -r </p>
                <li><strong>ss:</strong> Another utility to investigate sockets, network connections, and network interfaces.</li>
                <li><strong>tcpdump:</strong> Capture and analyze network traffic for troubleshooting purposes.</li>
            </ul>
        </section>
        <section>
            <h2>Viewing Network Properties</h2>
            <p>To view network properties in Linux, you can use commands such as:</p>
            <ul>
                <li><strong>ifconfig or ip addr:</strong> Display detailed information about network interfaces, including IP addresses, MAC addresses, and network settings.</li>
                <li><strong>route:</strong> Show the routing table, which contains information about how packets are routed through the network.</li>
                <li><strong>hostname:</strong> Display the system's hostname, which is used to identify the system on the network.</li>
                <li><strong>cat /etc/resolv.conf:</strong> View the DNS resolver configuration file, which specifies the DNS servers used for domain name resolution.</li>
                <li><strong>nmcli:</strong> Command-line interface for NetworkManager, a tool for managing network connections on Linux systems.</li>
            </ul>
        </section>
        <a href="permissions.php"><button>Permissions</button></a>

    </main>


<?php

    include($path . "inc/footer.php");

?>