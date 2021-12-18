     <?php
     $title = 'index';
     include 'includes/header.php';
     // if page is not found..it will give a warning but the page will load regardless
     ?>
     <!-- Basic HTML --> 
     <h1><?php echo $title ?></h1>
     <br/>
     <?php 
         // Printing to HTML using echo
         echo 'Hello World!';
         echo '<br/>';
         echo 'Second Line';
   
         $name = 'Maimoon Hossain';
         $age = 21;
         echo '<br/>';
         echo $name;
         echo '<h1>My Name is: '.$name.' </h1>';
         echo '<h1>My Age is: '.$age.' </h1>';

         echo "<h1>My Name is: $name </h1>"
         
    ?>
    <button class="btn btn-dark">CLICK ME!</button>
    <button class="btn btn-primary">CLICK ME!</button>
    <button class="btn btn-success">CLICK ME!</button>
    <?php
     require 'includes/footer.php';
     // if page is not found..the rest of the page crashes
     ?>
