<main class="main pt-4">
    <div class="container">
        <?php $nb_pages = $numberOfEpisodes->nb_episodes/5+1; ?>
        <?=$numberOfEpisodes->getPagination($nb_pages);?>
        <div class="row">
            <div class="col-md-6 col-sm-10 col-xs-10 mx-auto">
                <?php foreach ($posts as $post): ?>
                    <article class="card mb-4"> 
                        <header class="card-header">  
                            <div class="card-meta">
                                <p><?= $post->creation_date_fr ?></p>
                            </div>
                            <h4 class="card-title"> 
                                <?= htmlspecialchars($post->title) ?>
                            </h4>
                        </header>
                        <!-- <script>
                            console.log('img/" . <?php $post->image?> . "');
                        </script>
                        <?php var_dump($post->image)  ?>
                        <img class="card-img" src= "img/P1050461.JPG"  alt="Trulli" width="500" height="333">
                        <img class="card-img" src= "<?php echo "img/".$post->image ?>" alt="Trulli" width="500" height="333">
                        <img class="card-img" src= "<?= ROOT ?>/public/img/P1050461.JPG"  alt="Trulli" width="500" height="333"> -->
                        <?= $post->getExtract()?>
                    </article> 
                <?php endforeach; ?>
            </div>
        </div>
        <?=$numberOfEpisodes->getPagination($nb_pages);?>
    </div>
</main>