<h3>Most popular </h3>
                        <div class = "list-group list-group-flush">
                            <?php foreach($most_popular_post as $link) : ?>
                            <a href = "post?id=<?=$link['post_id'] ?>" class="list-group-item list-group-item-action"><?=$link['title'] ?></a>
                            <?php endforeach; ?>
                        </div>