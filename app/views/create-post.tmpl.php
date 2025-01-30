<?php require(COMPONENTS. "/header.php") ?>
        <main class = "main">
            <div class="row">
                <div class="col-2">
                <?php require("components/sidebar.php") ?>
                </div>


                <div class="col-10">
                    <h3><?= $header ?? "" ?></h3>
                    <form action="" method="post">
                      <div class="mb-3">
                          <label for="title" class="form-label">Post Title</label>
                          <input type="title" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter title" value="<?= old('title')?>">
                          <?= isset($validator) ? $validator->listErrors('title'): "" ?>
                           </div>
                       <div class="mb-3">
                          <label for="excerpt" class="form-label">Description</label>
                          <textarea name="excerpt" class="form-control" id="exampleFormControlTextarea1" placeholder="Enter description" rows="3" <?= old('excerpt')?>></textarea>
                          <?= isset($validator) ? $validator->listErrors('excerpt'): "" ?>
                           </div>
                      <div class="mb-3">
                          <label for="content" class="form-label">Content</label>
                          <textarea name="content" class="form-control" id="exampleFormControlTextarea1" placeholder="Enter content" rows="3" <?= old('content')?>></textarea>
                          <?= isset($validator) ? $validator->listErrors('content'): "" ?>
                      </div>
                      <div>
                          <button type="submit" class = "btn btn-primary">Create</button>
                      </div>
                      </form>
                </div>

            </div>
        </main>
        
        <?php require(COMPONENTS. "/footer.php") ?>