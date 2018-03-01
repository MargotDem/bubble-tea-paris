<?php
require 'BaseModelClass.php';

class BubbleTeas extends BaseModelClass {
  public function __construct() {
    $this->table = 'bubble_teas';
  }

  public function fetchByCriteria($criteria) {
    $sql = "SELECT * FROM bubble_teas WHERE ";

    foreach ($criteria as $criterion) {
      $sql = $sql . $criterion[0] . " = :" . $criterion[0] . " AND ";
    }

    $sql = substr($sql, 0, -4);


    $pdo_statement = $this->prepareStatement($sql);

    try {
      foreach ($criteria as $criterion) {
        $placeholderValue = ":" . $criterion[0];
        $pdo_statement->bindParam($placeholderValue, $criterion[1]);
      }
      $pdo_statement->execute();
      $result = $pdo_statement->fetchAll();
    } catch (PDOException $e) {
      echo "error: " . $e->getMessage();
    }

    return $result;
  }
}
?>
