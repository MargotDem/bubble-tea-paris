<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/htmlHeader.html.php"; ?>

  <div class="wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/views/sidebar.html.php"; ?>

    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 delete-form">
          Are you sure you want to delete this bubble tea from the database?
          <form method="post" action="/bubbleteas/index.php">
            <input name="action" type="submit" value="delete">
            <input name="id" type="hidden" value="<?php echo $_GET["id"]; ?>">
          </form>
        </div>
      </div>
    </div>

  </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/htmlFooter.html.php"; ?>
