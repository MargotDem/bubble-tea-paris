<?php require 'htmlHeader.html.php'; ?>

  <div class="wrapper">
    <?php
    require '../views/sidebar.html.php';
    ?>

    <div class="single-bubbletea">

      <div id="map" class="bubble-tea-map"></div>

        <div class="container">
          <div class="row">
            <div class="col-sm-9 col-sm-offset-3 single-bubble-tea-info">

              <div class="single-bubble-tea-info-main">
                <img
                  class="single-bubble-tea-img"
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0ZN0kRWJoSCTRWj0RemTZ1PzJCukSq7IsIg4XEldkkJNuNzhBoA"
                />
                <div class="single-bubble-tea-content">
                  <div class="single-bubble-tea-name">
                    <h1><?php echo $bubble_tea[0]['name']; ?></h1>
                  </div>
                  <div class="single-bubble-tea-details">
                    <div class="single-bubble-tea-phone">
                      <?php echo "Tél : " . $bubble_tea[0]['phone']; ?>
                    </div>
                    <div class="single-bubble-tea-adress">
                      <?php echo $bubble_tea[0]['address'] . " (" . $bubble_tea[0]['borough'] . "e arrondissement)"; ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="single-bubble-tea-info-additional">
                <div class="single-bubble-tea-note">
                  <?php echo "Note : " . $bubble_tea[0]['global_note']; ?>
                </div>
                <div class="single-bubble-tea-additional">

                  <div class="single-bubble-tea-open-times">
                    <?php echo "Horaires : " . $bubble_tea[0]['open_times']; ?>

                  </div>
                  <div class="single-bubble-tea-other">
                    <?php echo "Commentaire : " . $bubble_tea[0]['additional_info']; ?>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>

    </div>

    <div class="comments"></div>

  </div>

  <script src="/public/js/carte.js"></script>
  <script type="text/javascript">
    window.onload = function () {
      initMap({
        info: '<?php echo $bubble_tea[0]['name']; ?>',
        lat: <?php echo $bubble_tea[0]['latitude']; ?>,
        long: <?php echo $bubble_tea[0]['longitude']; ?>
      })
    }
  </script>
<?php require 'htmlFooter.html.php'; ?>
