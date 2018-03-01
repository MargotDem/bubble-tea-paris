<?php
if (isset($_POST["email"]) && isset($_POST["password"])) {
	echo "coucou there";

  require $_SERVER['DOCUMENT_ROOT'] . "/config.php";

  try {
    $pdo = new PDO(
      "mysql:dbname=$DBNAME;host=$DBHOST;charset=utf8", $DBUSER, $DBPASSWORD
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo 'ERREUR : ' . $e->getMessage();
    $pdo = null;
  }

  try {
    $sql = "SELECT * FROM admin WHERE email = :email AND password = :password";

    $email = $_POST["email"];
    $password = $_POST["password"];

    $statement = $pdo->prepare($sql);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();

    $result = $statement->fetchAll();

  } catch (PDOException $e) {
    echo 'erreur';
    exit();
  }

  if ($result[0]["id"] > 0) {
    session_start();

    $_SESSION["id"] = $result[0]["id"];

    header ('location: /index.php');

  } else {
    session_start();
    session_unset();
    session_destroy();
    header ('location: /index.php');
  }

} else {
  header ('location: /index.php');
}
