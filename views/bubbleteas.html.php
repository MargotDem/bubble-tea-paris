<?php require 'htmlHeader.html.php'; ?>

  <div class="wrapper">
    <?php
    require '../views/sidebar.html.php';
    ?>

    <div class="bubbleteas">

        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-3 bubbleteas-content blabla">
              <?php

              foreach ($bubble_teas as $bubble_tea) {
              ?>

                <div class="bubble-tea-card">
                  <img
                    class="bubble-tea-card-img"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0ZN0kRWJoSCTRWj0RemTZ1PzJCukSq7IsIg4XEldkkJNuNzhBoA"
                  />
                  <div class="TEST">HEY</div>
                </div>

              <?php
              }

              ?>
            </div>

          </div>
        </div>
    </div>
  </div>

<?php require 'htmlHeader.html.php'; ?>
