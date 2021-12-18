<!DOCTYPE html>
<html lang="en">
<?php
     $title = 'Functions';
     include 'includes/header.php';
     ?>
  <h1><?php echo $title ?></h1>

  <?php

      function writeMessage() {
         echo "You are a nice person<br/>";
      }
      
      writeMessage();
      writeMessage();
      writeMessage();

      function addFunction($num1,$num2) {
         $result = $num1 + $num2;
         echo "The sum of $num1 and $num2 is: $result <br/>";
      }

      addFunction(5,5);
      addFunction(15,5);

     
  ?>

  <?php
     require 'includes/footer.php';
     // if page is not found..the rest of the page crashes
     ?>