<?php
class BaseModelClass {
  function initDatabase() {
    require $_SERVER['DOCUMENT_ROOT'] . "/config.php";
    try {
      $pdo = new PDO(
        "mysql:dbname=$DBNAME;host=$DBHOST;charset=utf8", $DBUSER, $DBPASSWORD
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

    try {
      $pdo_statement->execute();
      $result = $pdo_statement->fetchAll();
    } catch (PDOException $e) {
      echo "error: " . $e->getMessage();
    }

    return $result;
  }

  public function fetchById($id) {
    $table = $this->table;
    $pdo_statement = $this->prepareStatement("SELECT * FROM bubble_teas WHERE id = :id");

    try {
      $pdo_statement->bindParam(':id', $id);
      $pdo_statement->execute();
      $result = $pdo_statement->fetchAll();
    } catch (PDOException $e) {
      echo "error: " . $e->getMessage();
    }

    return $result;
  }

  public function delete($id) {
    $table = $this->table;
    $pdo_statement = $this->prepareStatement("DELETE FROM $table WHERE id = :id");

    try {
      $pdo_statement->bindParam(':id', $id);
      $pdo_statement->execute();
    } catch (PDOException $e) {
      echo "error: " . $e->getMessage();
    }
  }

  public function edit($id, $newEntryData) {
    $table = $this->table;

    $sql = "";

    foreach ($newEntryData as $array) {
      $sql = $sql . "UPDATE $table SET " . $array[0] . " = :" . $array[0] . " WHERE id = " . $id . "; ";
    }

    $sql = substr($sql, 0, -2);

    $pdo_statement = $this->prepareStatement($sql);

    try {
      foreach ($newEntryData as $array) {
        $placeholderValue = ":" . $array[0];
        $pdo_statement->bindParam($placeholderValue, $array[1]);
      }

      $pdo_statement->execute();

    } catch (PDOException $e) {
      echo "error: " . $e->getMessage();
    }
  }

  public function create($newEntryData) {
    $table = $this->table;
    $columns = "";
    $placeholderValues = "";

    foreach ($newEntryData as $array) {
      $columns = $columns . $array[0] . ", ";
      $placeholderValues = $placeholderValues . ":" . $array[0] . ", ";
    }

    $columns = substr($columns, 0, -2);
    $placeholderValues = substr($placeholderValues, 0, -2);

    $pdo_statement = $this->prepareStatement("INSERT INTO $table ($columns) VALUES ($placeholderValues)");

    try {
      foreach ($newEntryData as $array) {
        $placeholderValue = ":" . $array[0];
        $pdo_statement->bindParam($placeholderValue, $array[1]);
      }

      $pdo_statement->execute();

    } catch (PDOException $e) {
      echo "error: " . $e->getMessage();
    }
  }
}
?>
