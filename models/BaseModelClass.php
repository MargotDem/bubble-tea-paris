<?php

class BaseModelClass {
  public function __construct($table) {
    $this->table = $table;
  }

  function initDatabase() {
    try {
      $pdo = new PDO(
        "mysql:dbname=BubbleTea;host=localhost;charset=utf8", 'BubbleTeaUser', 'PleaseFindABetterOne'
      );
    } catch (PDOException $e) {
      echo 'ERREUR : ' . $e->getMessage();
      $pdo = null;
    }

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
  }

  function prepareStatement($sql) {
    $pdo_statement = null;

    $pdo = $this->initDatabase();

     if ($pdo) {
       try {
         $pdo_statement = $pdo->prepare($sql);
       } catch (PDOException $e) {
         echo 'erreur : ' . $e->getMessage();
       }
     }

     return $pdo_statement;
  }

  public function fetch() {
    $table = $this->table;
    $pdo_statement = $this->prepareStatement("SELECT * FROM bubble_teas");
    $name = 'BubbleTea1';

    try {
      $pdo_statement->execute();
      $result = $pdo_statement->fetchAll();
    } catch (PDOException $e) {
      echo "erreur est : " . $e->getMessage();
    }

    return $result;
  }

  public function fetchById($id) {

  }

  public function delete($id) {

  }

  public function edit($id, $values) {

  }

  public function create($values) {

  }
}

?>
