<?php

session_start();

if (!isset($_SESSION["id"])) {
  session_destroy();

  require "../views/admin/login.html.php";

} else {
  header('Location: /index.php');
}
?>
