<main class="main pt-4">
    <div class="container">
        <?php
        $nb_billets = $numberOfPages->nb_billets/5+1;
        $pagination = new \app\Table\Post; ?>

        <?=$pagination::getPagination($nb_billets);?>


        <div class="row">
            <div class="col-md-6 col-sm-10 col-xs-10 mx-auto">
                <?php foreach ($posts as $post): ?>
                    <!-- <div class="news"> -->
                    <article class="card mb-4"> 
                        <header class="card-header">  
                            <div class="card-meta">
                                <p><?= $post->creation_date_fr ?></p>
                            </div>
                            <h4 class="card-title"> 
                                <?= htmlspecialchars($post->title) ?>
                            </h4>
                        </header>
                        <?= $post->extract?>
                    </article> 
                <?php endforeach; ?>
            </div>
        </div>

        <div class="container" id="upper_space">
        <?=$pagination::getPagination($nb_billets);?>
        </div>
    </div>
</main>