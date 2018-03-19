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

    $bubble_tea = $BubbleTeas->fetchById($_GET['id']);

    require '../views/admin/edit.html.php';

  } elseif (isset($_SESSION["id"]) && isset($_GET["action"]) && $_GET["action"] === "delete") {

    require '../views/admin/delete.html.php';

  } elseif (isset($_SESSION["id"]) && isset($_POST["action"]) && $_POST["action"] === "edit") {

    $values = [
      ['name', $_POST['name']],
      ['address', $_POST['address']],
      ['phone', $_POST['phone']],
      ['open_times', $_POST['open_times']],
      ['additional_info', $_POST['additional_info']],
      ['longitude', $_POST['longitude']],
      ['latitude', $_POST['latitude']],
      ['borough', $_POST['borough']],
      ['price_range', $_POST['price_range']]
    ];

    $BubbleTeas->edit(12, $values);
    header ('location: /bubbleteas/index.php?bubbletea=12');

  } elseif (isset($_SESSION["id"]) && isset($_POST["action"]) && $_POST["action"] === "delete") {

    $BubbleTeas->delete($_POST["id"]);
    header ('location: /bubbleteas/index.php?action=fetchAll');

  } elseif (isset($_SESSION["id"]) && isset($_GET["action"]) && $_GET["action"] === "add") {

    require '../views/admin/add.html.php';

  } elseif (isset($_SESSION["id"]) && isset($_POST["action"]) && $_POST["action"] === "add") {

    $values = [
      ['name', $_POST['name']],
      ['address', $_POST['address']],
      ['phone', $_POST['phone']],
      ['open_times', $_POST['open_times']],
      ['additional_info', $_POST['additional_info']],
      ['longitude', $_POST['longitude']],
      ['latitude', $_POST['latitude']],
      ['borough', $_POST['borough']],
      ['price_range', $_POST['price_range']]
    ];

    $BubbleTeas->create($values);
    header ('location: /bubbleteas/index.php?action=fetchAll');

  } else {

    header ('location: /index.php');

  }
?>
