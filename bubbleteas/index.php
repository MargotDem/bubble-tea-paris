<?php
  if (isset($_GET['action'])) {
    require '../models/BubbleTeas.php';

    $BubbleTeas = new BubbleTeas();

    // $values = [array("column"=>"name", "value"=>"HOLA"), array("column"=>"address", "value"=>"QUE TAL")];

    $bubble_teas = $BubbleTeas->fetchByCriterion('');

    require '../views/bubbleteas.html.php';
  } else {
    echo 'le form n’a pas été rempli';
  }
?>
