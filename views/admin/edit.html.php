<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/htmlHeader.html.php"; ?>

  <div class="wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/views/sidebar.html.php"; ?>

    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 edit-form">
          <form method="post" action="/bubbleteas/index.php">
            <input type="text" name="name" value="<?php echo $bubble_tea[0]['name']; ?>">
            <input type="text" name="address" value="<?php echo $bubble_tea[0]['address']; ?>">
            <input type="text" name="phone" value="<?php echo $bubble_tea[0]['phone']; ?>">
            <input type="text" name="open_times" value="<?php echo $bubble_tea[0]['open_times']; ?>">
            <input type="text" name="additional_info" value="<?php echo $bubble_tea[0]['additional_info']; ?>">
            <input type="text" name="longitude" value="<?php echo $bubble_tea[0]['longitude']; ?>">
            <input type="text" name="latitude" value="<?php echo $bubble_tea[0]['latitude']; ?>">
            <input type="text" name="borough" value="<?php echo $bubble_tea[0]['borough']; ?>">
            <input type="text" name="price_range" value="<?php echo $bubble_tea[0]['price_range']; ?>">

            <input name="action" type="submit" value="edit">
          </form>
        </div>
      </div>
    </div>

  </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/htmlFooter.html.php"; ?>
