<?php
  if (isset($_GET['action'])) {
    require '../models/BubbleTeas.php';
    $BubbleTeas = new BubbleTeas('bubble_teas');
    $bubble_teas = $BubbleTeas->fetchByCriterion('abc');
    // var_dump($bubble_teas);
    require '../views/bubbleteas.html.php';
  } else {
    echo 'le form n’a pas été rempli';
  }
?>
