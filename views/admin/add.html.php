<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/htmlHeader.html.php"; ?>

  <div class="wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/views/sidebar.html.php"; ?>

    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 add-form">
          <form method="post" action="/bubbleteas/index.php">
            <input type="text" name="name" placeholder="Nom">
            <input type="text" name="address" placeholder="Adresse">
            <input type="text" name="phone" placeholder="Téléphone">
            <input type="text" name="open_times" placeholder="Horaires">
            <input type="text" name="additional_info" placeholder="Autre(s) info(s)">
            <input type="text" name="longitude" placeholder="Longitude">
            <input type="text" name="latitude" placeholder="Latitude">
            <input type="text" name="borough" placeholder="Arrondissement">
            <input type="text" name="price_range" placeholder="Prix">
            <input name="action" type="submit" value="add">
          </form>
        </div>
      </div>
    </div>

  </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/htmlFooter.html.php"; ?>
