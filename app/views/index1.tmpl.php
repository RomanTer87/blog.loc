<?php require(COMPONENTS. "/header.php") ?>
        <main class = "main">
            <div class="row">
                <div class="col-2">
                <?php require("components/sidebar.php") ?>
                </div>


                <div class="col-10">
                    <h3>   <?=$header ?? "" ?> </h3>
                <?php foreach($posts as $post) : ?>
                    <div class="card mb-3" >
                        <div class="row g-0">

                            <div class="col-md-12">
                                <div class="card-body">
                                <a href = "post?id=<?= $post['post_id'] ?>"><h5 class="card-title"><?= $post['title'] ?></h5></a>
                                <p class="card=text"><?= $post['excerpt'] ?></p>
                                <p class="card-text"><small class="text-body-secondary">last update 3 min ago  </small> </p>
                                </div>   
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </main>
        
        <?php require(COMPONENTS. "/footer.php") ?>