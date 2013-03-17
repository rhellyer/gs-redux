<?php snippet('beginning', array( 'layout' => 'homepage') ) ?>

<div class="content clearfix ">
    <?php snippet('homepagebanner') ?>

    <div class="row features v2">
        <div class="span5 featureleft">
            <?php echo kirbytext($page->featureleft()) ; ?>
        </div>

        <?php
        // find two specific articles to display with their images
        // TODO update this to be more general and pull latest two 
        // articles from the news section
        $article1 = $pages->find('about-us/news/merger-announcement');
        $url1    = $article1->url();
        $thumb1 = $article1->images()->find('article80.png');
        $article2 = $pages->find('about-us/news/liberia-report');
        $url2     = $article2->url();
        $thumb2 = $article2->images()->find('article80.jpg');
        ?>
        <div class="span4 featurecenter">
          <div class="row">
               <div class="span1">
                   <a href="<?php echo $url1  ?>"><img src="<?php echo $thumb1->url() ?>" alt=""></a>
               </div>
               <div class="span3">
                   <h3><a href="<?php echo $url1 ?>">MERGER ANNOUNCEMENT</a></h3>
                   <p>Global Strategies for Hiv Prevention and the international Pediatric Outreach Project To Unite to expand Efforts to Help Women and Children »</p>
                </div>
            </div>
           <div class="row">
               <div class="span1">
                   <a href="<?php echo $url2; ?>"><img src="<?php echo $thumb2->url() ?>" alt=""></a>
               </div>
               <div class="span3">
                   <h3><a href="<?php echo $url2 ?>">LIBERIA SITE VISIT</a></h3>
                   <p>How do you impact the care of newborns thousands of miles away? 
                    This is a question that Global Strategies is hard at work to answer »</p>
                </div>
            </div>
            <!-- <div class="row">
               <div class="span1">
                   <a href="<?php echo $url2 ?>"><img src="<?php echo $thumb2->url(); ?>" alt=""></a>
               </div>
               <div class="span3">
                   <h3><a href="<?php echo $url2 ?>">HALT SIDA</a></h3>
                   <p>
                    Working with Dr. Givano and Halt SIDA in Eastern Congo, Global Strategies is planning the next 
                    steps to address HIV prevalence among sex workers..
                </p>
            </div> 
        </div>-->
    </div>
    <div class="span3">
        <div class="featureright"><?php echo kirbytext($page->featureright()) ; ?></div>
    </div> 
</div>



</div>
<?php snippet('ending') ?>
