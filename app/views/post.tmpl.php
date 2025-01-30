<?php require(COMPONENTS. "/header.php") ?>
        <main class = "main">
            <div class="row">
                <div class="col-2">
                <?php require("components/sidebar.php") ?>
                </div>


                <div class="col-10">
                    <h3><?= $header ?? "" ?></h3>
                      <?= $content ?>
                </div>

            </div>
        </main>
        
        <?php require(COMPONENTS. "/footer.php") ?>