<?php
include 'config.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body style="background-color: rgb(7, 60, 72);">
  
    <nav>
        <div class="container-navbar"
            style="background-color: rgb(183, 255, 2); width: 100%; height: 75px; border: 2px; border-radius: 5px;">
            <ul style="display: flex; height: fit-content; justify-content: center; align-items: center;">
                <li style="border: 1px white; list-style-type: none; padding: 20px; margin: 5px; ">
                    <a href="index.html">Home</a>
                </li>
                <li class="li-navbar" style="border: 1px white; list-style-type: none; padding: 20px; margin: 5px; ">
                    <a href="Gallery.html">Gallery</a>
                </li>
                <li style="border: 1px white; list-style-type: none; padding: 20px; margin: 5px; ">
                    <a href="Blog.php">Blog</a>
                </li>
                <li class="li-navbar" style="border: 1px white; list-style-type: none; padding: 20px; margin: 5px; ">
                    <a href="Contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar End -->
    <h1 style="text-align: center;"> Blog page</h1>
    <?php
            $query = "SELECT * FROM blog";
            $result = mysqli_query($conn, $query);

            $no = 1;

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($no >=0) {
            ?>
    <div>
    <p>
    <?= $row["artikel"] ?>
    </p>
    <p>
        <a
            href="<?= $row["link"] ?>">
            <?= $row["link"] ?>
        </a>
    </p>
    </div>
    <?php } 
            $no++;
            }
            } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);}
            ?>
</body>

</html>