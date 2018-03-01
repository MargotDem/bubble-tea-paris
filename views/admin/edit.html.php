<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/htmlHeader.html.php"; ?>

  <div class="wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/views/sidebar.html.php"; ?>

    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 edit-form">
          <form method="post" action="/bubbleteas/index.php">
            <input name="action" type="submit" value="edit">
          </form>
        </div>
      </div>
    </div>

  </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/htmlFooter.html.php"; ?>
