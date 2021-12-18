<?php
      $title = 'If Statement';
      include 'includes/header.php';
      ?>
   <h1><?php echo $title ?></h1>
    <?php 

        echo '<h2>If statement</h2>';

        $grade = 49;

        if($grade >= 50)
           echo '<h3 style="color:green;">You have Passed!</h3>';
        else 
           echo '<h3 style="color:red;">You have Failed!</h3>';
           

     ?>
  <?php
     require 'includes/footer.php';
     // if page is not found..the rest of the page crashes
     ?>