<?php
require 'BaseModelClass.php';

class BubbleTeas extends BaseModelClass {
  public function fetchByCriterion($criterion) {
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
}

?>
