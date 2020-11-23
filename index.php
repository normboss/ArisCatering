<?php
if (!session_id())
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <?php
    // require 'files/includes/globalSiteTag.html';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->
    <style>
        a {
            color: #ddd;
        }
    </style>
</head>

<body>
    <a href="./files/pages/menu.php">Click to enter</a>

    <script>

    window.location.href = "./files/pages/menu.php";
    </script>
</body>
</html>
