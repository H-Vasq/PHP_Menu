<?php
if (!defined('TITLE')) {
    define("TITLE", "Menu Item" . " | Franklin's Fine Dining");
}

    // define("TITLE", "Menu | Franklin's");
    include('Student/includes/header.php');
?>

    <div id="menu-items">

        <h1>Our Delicious Menu</h1>
        <p>Like our team, our menu is small but does it pack a punch!</p>
        <p><em>Click any menu item to learn more about it.</em></p>

        <hr>

        <ul>
            <?php foreach ($menuItems as $dish => $item) { ?>

            <li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item["title"]; ?> <sup>$</sup><?php echo $item["price"]; ?></a></li>
            
            <?php } ?>

        </ul>
        <hr>

    </div>

<?php include('Student/includes/footer.php');
