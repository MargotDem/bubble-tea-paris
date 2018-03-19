<?php
require '../models/BubbleTeas.php';
$BubbleTeas = new BubbleTeas();
session_start();

  if (isset($_GET["action"]) && $_GET["action"] === "search") {

    $criterion = [["borough", $_GET["borough"]]];

    $bubble_teas = $BubbleTeas->fetchByCriteria($criterion);

    require '../views/bubbleteas.html.php';

  } elseif (isset($_GET['bubbletea'])) {

    $bubble_tea = $BubbleTeas->fetchById($_GET['bubbletea']);

    require '../views/bubbletea.html.php';

  } elseif (isset($_SESSION["id"]) && isset($_GET["action"]) && $_GET["action"] === "fetchAll") {
    $bubble_teas = $BubbleTeas->fetch();

    require '../views/bubbleteas.html.php';

  } elseif (isset($_SESSION["id"]) && isset($_GET["action"]) && $_GET["action"] === "edit") {
    require '../views/admin/edit.html.php';

  } elseif (isset($_SESSION["id"]) && isset($_GET["action"]) && $_GET["action"] === "delete") {
    require '../views/admin/delete.html.php';

  } elseif (isset($_SESSION["id"]) && isset($_POST["action"]) && $_POST["action"] === "edit") {
    echo 'let edit then';

  } elseif (isset($_SESSION["id"]) && isset($_POST["action"]) && $_POST["action"] === "delete") {
    $BubbleTeas->delete($_POST["id"]);
    header ('location: /bubbleteas/index.php?action=fetchAll');

  } else {
    header ('location: /index.php');
  }
?>
