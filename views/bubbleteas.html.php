<?php require 'htmlHeader.html.php'; ?>

  <div class="wrapper">
    <?php
    require '../views/sidebar.html.php';
    ?>

    <div class="bubbleteas">

        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-3 bubble-teas-title">
              <h2>Bubble teas correspondant à votre recherche :</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8 col-sm-offset-3 bubbleteas-content">
              <?php

              foreach ($bubble_teas as $bubble_tea) {
              ?>

                <a class="bubble-tea-card" href="/bubbleteas/index.php?bubbletea=<?php echo $bubble_tea['id'];?>">
                  <img
                    class="bubble-tea-card-img"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0ZN0kRWJoSCTRWj0RemTZ1PzJCukSq7IsIg4XEldkkJNuNzhBoA"
                  />
                  <div class="bubble-tea-card-content">
                    <div class="bubble-tea-card-name">
                      <h3><?php echo $bubble_tea['name']; ?></h3>
                    </div>
                    <div class="bubble-tea-card-details">
                      <div class="bubble-tea-card-note">
                        <?php echo "Note : " . $bubble_tea['global_note']; ?>
                      </div>
                      <div class="bubble-tea-card-adress">
                        <?php echo $bubble_tea['address'] . " (" . $bubble_tea['borough'] . "e arrondissement)"; ?>
                      </div>
                    </div>
                  </div>
                </a>

              <?php
              }

              ?>
            </div>

          </div>
        </div>
    </div>
  </div>

<?php require 'htmlFooter.html.php'; ?>
