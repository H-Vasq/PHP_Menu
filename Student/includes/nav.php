<ul>
    <?php
        // foreach ((array) $navItems as $item) {
        //     echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
        //   }

        if (isset($navItems)) {
          foreach ((array) $navItems as $item) {
            echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
          }
        }
    ?>
</ul>

