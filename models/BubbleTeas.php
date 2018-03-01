<?php
require 'BaseModelClass.php';

class BubbleTeas extends BaseModelClass {
  public function __construct() {
    $this->table = 'bubble_teas';
  }

  public function fetchByCriterion($criterion) {
    $pdo_statement = $this->prepareStatement("SELECT * FROM bubble_teas");

    try {
      $pdo_statement->execute();
      $result = $pdo_statement->fetchAll();
    } catch (PDOException $e) {
      echo "error: " . $e->getMessage();
    }

    return $result;
  }
}

?>
