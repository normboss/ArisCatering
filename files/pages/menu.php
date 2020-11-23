<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ari's Catering'</title>

    <link href="../css/menu.css" media="screen" rel="stylesheet" type="text/css">


</head>

<body>
    <main>

        <nav>
            <ul>
                <li>HOME</li>
                <li>ABOUT</li>
            </ul>
        </nav>

        <div class="top-section">

            <div class="box sp1">
            </div>

            <div class="box blank black2"></div>
            <div class="box blank3"></div>
            <div class="box blank4"></div>

            <div class="box cookin">
                See What’s Cookin’ at
            </div>
            <img class="box logo" src="../images/chef_black_whte_trans1.png">
            <!-- <img class="box logo" src="../images/chef_black_whte_trans1.png"> -->
            <div class="box blank">
            </div>
            <div class="box catering">
                Ari's Catering!
            </div>
            <div class="box hollis">
                Serving the Hollis, NH area
            </div>

            <div class="box delicious">
                Delicious daily entrees with fruit, snack & drink
            </div>

            <div class="box price">
                <span class="only">Only&nbsp;</span>
                <span class="dollars">$12</span>
                <span class="cents">99</span>
                <span class="asteric">*</span>
            </div>

            <div class="box pickup">
                *Pickup, or 3+ orders delivered for additional $5.99
            </div>

            <div class="box phone-number">
                <a href="tel:802-503-2124">802-503-2124</a>
            </div>

            <div class="box orders">
                Orders must be placed by X:00PM<br> of the previous day
            </div>
        </div>

        <div class="menu-section">

            <div class="menu-header">
                MENU:
            </div>

            <div class="menu-item">
                <div id="monday" class="day-header">
                    <?php require '../resources/monday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <?php require '../resources/monday-heading.php';  ?>
                </div>
                <div class="meal-content">
                    <?php require '../resources/monday-content.php';  ?>
                </div>
            </div>
            <div class="menu-item">
                <div id="tuesday" class="day-header">
                    <?php require '../resources/tuesday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <?php require '../resources/tuesday-heading.php';  ?>
                </div>
                <div class="meal-content">
                    <?php require '../resources/tuesday-content.php';  ?>
                </div>
            </div>
            <div class="menu-item">
                <div id="wednesday" class="day-header">
                    <?php require '../resources/wednesday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <?php require '../resources/wednesday-heading.php';  ?>
                </div>
                <div class="meal-content">
                    <?php require '../resources/wednesday-content.php';  ?>
                </div>
            </div>
            <div class="menu-item">
                <div id="thursday" class="day-header">
                    <?php require '../resources/thursday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <?php require '../resources/thursday-heading.php';  ?>
                </div>
                <div class="meal-content">
                    <?php require '../resources/thursday-content.php';  ?>
                </div>
            </div>
            <div class="menu-item">
                <div id="friday" class="day-header">
                    <?php require '../resources/friday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <?php require '../resources/friday-heading.php';  ?>
                </div>
                <div class="meal-content">
                    <!-- Served up on a fresh croissant with choice of lettuce, tomato and/or onion -->
                    <?php require '../resources/friday-content.php';  ?>
                </div>
            </div>
            <div class="menu-item">
                <div id="saturday" class="day-header">
                    <?php require '../resources/saturday-date.php';  ?>
                </div>
                <div class="meal-summary">
                    <?php require '../resources/saturday-heading.php';  ?>
                </div>
                <div class="meal-content">
                    <!-- Served up on a fresh croissant with choice of lettuce, tomato and/or onion -->
                    <?php require '../resources/saturday-content.php';  ?>
                </div>
            </div>
            <div class="images">
                <!-- <img id="tape1" src="../images/tape-cropped1-white-sm.png">
                <img id="image2" src="../images/image2.JPG">

                <img id="tape2" src="../images/tape-cropped1-white-sm.png">
                <img id="image1" src="../images/image1.JPG">

                <img id="tape3" src="../images/tape-cropped1-white-sm.png">
                <img id="image3" src="../images/image3.png">

                <div class="image1"></div>
                <div class="image2"></div>
 -->
                <img src="../images/composite-cropped.png">
            </div>

        </div>
        <div class="more-stuff">
            <div class="all-entrees">
                All entrees
            </div>
            <div class="price">
                <span class="dollar-sign">$</span>
                <span class="dollar-amount">12</span>
                <span class="cents-amount">99*</span>
            </div>

            <div class="happy">
                *We’ll be happy to deliver 3 or more orders to your business for an additional $5.99

            </div>

            <div class="pleased">
                Please call by 0:00 on lorem ipsum to place your order. Need a large order? Just ask! Give us a call to discuss your needs:
            </div>

            <div class="phone-number">
                802-503-2124
            </div>

        </div>


        <div class="footer">
            <p class="copy1">
                All entrees of the freshest ingredients, cooked by Ari & packed in natural microwaveable containers, plus napkin & utensils.
            </p>
            <p class="copy2">
                Everything prepared in a kitchen where dairy, gluten, eggs, peanuts and other allergens are used.
            </p>
        </div>

    </main>
</body>

</html>