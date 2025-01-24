<h3>Most popular </h3>
                        <div class = "list-group list-group-flush">
                            <?php foreach($most_popular_post as $post) : ?>
                            <a href = "<?=$post['slug'] ?>" class="list-group-item list-group-item-action"><?=$post['title'] ?></a>
                            <?php endforeach; ?>
                        </div>