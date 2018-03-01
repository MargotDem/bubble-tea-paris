<?php
require '../models/BubbleTeas.php';
$BubbleTeas = new BubbleTeas();

  if (isset($_GET["action"]) && $_GET["action"] === "search") {
    // $values = [["name", "autre bubble tea"], ["address", "some address yay"]];

    $criterion = [["borough", $_GET["borough"]]];

    $bubble_teas = $BubbleTeas->fetchByCriteria($criterion);

    require '../views/bubbleteas.html.php';

  } elseif (isset($_GET['bubbletea'])) {

    $bubble_tea = $BubbleTeas->fetchById($_GET['bubbletea']);
    // var_dump($bubble_tea);
    require '../views/bubbletea.html.php';

  } else {
    echo 'le form n’a pas été rempli';
  }
?>
