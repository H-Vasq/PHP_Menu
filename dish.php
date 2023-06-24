<?php
if (!defined('TITLE')) {
    define("TITLE", "Menu Item" . " | Franklin's Fine Dining");
}

    // define("TITLE", "Menu Item" . " | Franklin's Fine Dining");
    include('Student/includes/header.php');
    // include('menu.php'); 

    function strip_bad_chars( $input ) {
        $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input);
        return $output;

    
    }

    if (isset($_GET['item'])) {

        $menuItem = strip_bad_chars($_GET['item']);

        $dish = $menuItems[$menuItem];

    }

?>

<hr>

<div id="dish">
    <h1 style="display: flex; align-items: center;">
        <?php echo $dish['title']; ?>
        <span class="price" style="margin-left: 20px; font-size: 25px;">
            <sup>$</sup><?php echo $dish['price']; ?>
        </span>
    </h1>
    <p><?php echo $dish['blurb'];?></p>

    <!-- <p>
        <strong>Suggested beverage: <?php echo $dish['drink']; ?></strong>
    </p> -->
    <div style="display: flex; justify-content: space-between; align-items: center;">
    <p>
        <strong>Suggested beverage: <?php echo $dish['drink']; ?></strong>
    </p>
    <a href="menu.php" class="button previous" style="margin-top: -6px;">«Back to Menu</a>
    </div>
</div>

<hr>

<!-- <a href="menu.php" class="button previous">«Back to Menu</a> -->

<?php include('Student/includes/footer.php'); ?>
