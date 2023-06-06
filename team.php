<?php
    define("TITLE", "Team | Franklin's Fine Dining");
    include('Student/includes/header.php');
?>

    <div id="team-members" class="cf">

        <h1>Our Team at Franklin's</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores dolorem fuga voluptatum. Fuga sit possimus et quia aspernatur dolorum quo. Similique optio officia minus sit? Magni animi non expedita praesentium illum! Accusamus, ipsam aspernatur! Dolore vitae eius accusantium quidem atque obcaecati aspernatur? Eos velit sequi temporibus explicabo voluptatibus, odio, unde numquam id beatae facere perspiciatis, quos consequatur architecto in possimus delectus alias inventore quam quas? A consequuntur repellat, fugiat possimus ipsum modi mollitia corrupti est, aliquid eveniet culpa eos molestias.
        </p>

        <hr>

        <?php

foreach ($teamMembers as $member) {
    ?>
    
        <div class="member">
            <img src="Student/img/<?php echo $member["img"]; ?>.png" alt="<?php echo $member["name"]; ?>">
            <h5 style="margin-bottom: 3px;"><?php echo $member["name"]; ?></h5>
            <p><?php echo $member["bio"]; ?></p>
        </div>
    
    <?php
        }
    ?>
    
    </div>
    
    <hr>
    

<?php include('Student/includes/footer.php'); ?>

