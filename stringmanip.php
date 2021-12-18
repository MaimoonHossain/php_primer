<?php
     $title = 'String';
     include 'includes/header.php';
     ?>
     <h1><?php echo $title ?></h1>
    <?php
      $phrase1 = "studen who came late";
      $phrase2 = "in class, stand with Rock";
      $name = "maimoon hossain";
      echo $phrase1 . ' ' . $phrase2;
      echo '<br/>';

      echo 'Uppercase: ' . ucfirst($name) . '<br/>';
      echo 'Uppercase first letter of eacch word: ' . ucwords($name) . '<br/>';
      echo 'Uppercase: ' . strtoupper($name) . '<br/>';
      echo 'Uppercase: ' . strtolower('This was all upper case') . '<br/>';
      echo '<hr/>';
      echo 'Repeast String: ' . strtoupper(str_repeat($name,10)).'<br/>';
      echo 'Get a Substring: ' . substr($name, 3, 14) . '<br/>';
      echo 'Get position: ' . strpos($name,'h') . '<br/>';
      echo 'Find Character: ' . strchr($name, 'm') . '<br/>';
      echo 'Length of a string: ' . strlen($name) . '<br/>';
      echo 'Trim: ' . 'A' . trim(' B C D ') . '<br/>';
      echo 'LTrim: ' . 'A' . ltrim(' B C D ') . 'B'. '<br/>';
      echo 'RTrim: ' . 'A' . rtrim(' B C D ') . 'B'. '<br/>';
      echo 'Replace: ' . str_replace('class','hossain',$phrase2) . '<br/>';


      
    ?>
  <?php
     require 'includes/footer.php';
     // if page is not found..the rest of the page crashes
     ?>