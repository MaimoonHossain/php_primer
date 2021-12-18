<?php
     $title = 'Arrays';
     include 'includes/header.php';
     ?>
   <h1><?php echo $title ?></h1>

   <?php
      
      $num = 3;

      $numbers = array(1,2,3,4,5,6);

      echo $numbers[3];

      echo '<p>$numbers</p>';

      $size = count($numbers);
      echo "<p>Array numbers is size: $size</p>";

      for($count = 0; $count < $size; $count++) {
       echo "<p>$numbers[$count]</p>";
      }



   ?>
  <?php
     require 'includes/footer.php';
     // if page is not found..the rest of the page crashes
     ?>