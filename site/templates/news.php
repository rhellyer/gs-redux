<?php snippet('beginning') ?>
    
  
    <h1 class="title"><?php echo html($page->title()) ?></h1>

    <div class="news">
        <div class="row">
            <div class="span8"><?php foreach($page->children()->visible()->flip() as $article): ?>
                   
                
                        <div class="row">
                            <div class="span2"><div class="thumbnail"><?php echo kirbytext( $article->thumbnail ) ?></div></div>
                            <div class="span6">
                                <h2 class="newsarticletitle"><a href="<?php echo $article->url(); ?>"><?php echo $article->title; ?></a></h2>
                                <div class="newsarticledate"><?php echo $article->date; ?></div>
                                <div class="newsarticleintro"><?php echo kirbytext($article->intro); ?></div>
                            </div>
                        </div>
                        <!-- <a class="readmore" href="<?php echo $article->url() ?>">more  &rsaquo; </a> -->
                        <!-- <div class="separator">&nbsp;</div> -->
                    
                    <div class="article separator clear">&nbsp;</div>
                    
                
                <?php endforeach;  ?>
            </div>
            <div class="span2 offset2">
                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FGlobal-Strategies%2F78260623299&amp;width=292&amp;height=600&amp;show_faces=false&amp;colorscheme=light&amp;stream=true&amp;border_color=%234B85B2&amp;header=true&amp;appId=398424123549520" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:600px;" allowTransparency="true"></iframe>
            </div>
        </div>
    </div>

  
   

<?php snippet('ending') ?>

                            