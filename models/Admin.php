<?php
require 'BaseModelClass.php';

class Admin extends BaseModelClass {
  public function __construct() {
    $this->table = 'admin';
  }
}

?>
