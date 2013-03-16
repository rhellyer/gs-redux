<?php snippet('beginning') ?>
            
    <div class="content row">
        <h1 class="title span12 "><?php echo html($page->title()) ?></h1>
        <div class="span12">
            <div class="article row">
                <div class="span10 offset1"><?php echo kirbytext($page->text()) ?></div>
            </div>
            <div id="tabs">
                <ul class="clearfix">
                    <?php foreach($page->children()->visible() as $article): ?>
                    <li>
                        <a href="#<?php echo $article->uid() ?>">
                            <?php 
                                $image = $article->images()->find( ($article->uid()) . '.jpg') ; 
                            ?>
                            <img src="<?php echo $image->url(  ) ?>" alt=""/>   
                            
                        </a>
                    </li>
                    <?php endforeach;  ?>
                </ul>
                <?php foreach($page->children()->visible()->flip() as $article): ?>
                    <div class="row">
                        <div id="<?php echo $article->uid() ?>" class="span10 offset1">
                            <h2 class="title"><?php echo html($article->title()) ?></h2>
                            <?php echo kirbytext($article->text); ?>
                        </div>
                    </div>
                    
                <?php endforeach;  ?>
            </div>
        </div>
        
    </div>
            
            
            
<?php snippet('ending') ?>

                            