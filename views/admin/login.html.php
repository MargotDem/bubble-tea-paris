<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/htmlHeader.html.php"; ?>

  <div class="wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/views/sidebar.html.php"; ?>

    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 login-form">
          <form method="post" action="/admin/login.php">
            <input type="text" name="email" placeholder="Your email here">
            <input type="text" name="password" placeholder="Your password here">
            <input type="submit" value="Log in">
          </form>
        </div>
      </div>
    </div>

  </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/htmlFooter.html.php"; ?>
