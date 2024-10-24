<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="<?php echo $path ?>assets/css/groupprojectmain.css">
    <link rel="icon" type="image/x-icon" href="<?php echo $path ?>assets/images/mainiconshort.png">
</head>
<body>
    <div class="topnav">
        <figure class="main_icon">
            <a href="index.php"><img src="<?php echo $path ?>assets\images\iconmainlong.png" alt="logo"></a>
        </figure>
        <nav class="links" id="navLinks">

        <?php 
        // Connect to MySQ
        $servername = 'localhost';
        $username = 'djs9826';
        $password = 'Adrenosterone5^sensations';
        $dbname = 'djs9826';
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch navbar items from the database
        $sql = "SELECT * FROM navbar_items ORDER BY `order`";
        $result = $conn->query($sql);

        // Display navbar items
        // echo '<ul>';
        while ($row = $result->fetch_assoc()) {
            echo '<a href="' . $path . $row['url'] . '">' . $row['label'] . '</a>';
        }
        // echo '</ul>';

        // Close connection
        $conn->close();
        ?>
        </nav>
        <a href="javascript:void(0);" class="hamicon" onclick="toggleNav()">
            <img src="<?php echo $path ?>assets/images/Hamburger_icon_white.svg" alt="hamburger menu">
        </a>
    </div>
