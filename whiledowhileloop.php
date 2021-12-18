<?php
     $title = 'While & Do While';
     include 'includes/header.php';
     ?>
   <h1><?php echo $title ?></h1>
   <?php 
      $grade = 0;
      while($grade < 10) {
       echo '<p>I am less than 10</p>';
       $grade++;
      }

      echo 'Exit Loop!';

   ?>

    <h1>Do While Loop</h1>

    <?php 
      $grade = 0;
      do{
       echo '<p>I am less than 10</p>';
       $grade++;
      }while($grade < 10);

      echo 'Exit Loop!';

   ?>
  <?php
     require 'includes/footer.php';
     // if page is not found..the rest of the page crashes
     ?>