<?php snippet('beginning') ?>
    
  
    <h1 class="title"><?php echo html($page->title()) ?></h1>

    <?php foreach($page->children()->visible()->flip() as $article): ?>
       

            <div class="row">
                <div class="span2"><?php echo kirbytext( $article->thumbnail ) ?></div>
                <div class="span10">
                    <h2 class="newsarticletitle"><a href="<?php echo $article->url(); ?>"><?php echo $article->title; ?></a></h2>
                    <div class="newsarticledate"><?php echo $article->date; ?></div>
                    <div class="newsarticleintro"><?php echo kirbytext($article->intro); ?></div>
                </div>
            </div>
            <!-- <a class="readmore" href="<?php echo $article->url() ?>">more  &rsaquo; </a> -->
        
        <div class="article separator clear"></div>
        

    <?php endforeach;  ?>

    <div class="row annotation">
        <?php echo kirbytext($page->annotation()) ?>
    </div>
  
   

<?php snippet('ending') ?>

                            