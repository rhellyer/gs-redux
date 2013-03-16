<?php echo snippet('beginning') ?>
        	<h1 class="title"><?php echo html($page->title()) ?></h1>

	<div class="row" id="intro">
    	
    	<div class="span12">
            <?php echo kirbytext($page->text()) ?>
    	</div>
    </div>

    <div class="row">
        <div class="span10 offset1 bannerlinks-education">
            <?php echo kirbytext($page->bannerlinks()) ?>
        </div>

    </div>
 <!--    <div class="row">
        <div class="article offset3 span9">
            <?php echo kirbytext($page->text()) ?>
        </div>
    </div> -->

	<div class="row" id="article1">
    	<div class="span3" >
            <?php echo kirbytext($page->article1_title()) ?>
    	</div>
    	<div class="span9">
            <?php echo kirbytext($page->article1_text()) ?>
    	</div>
    </div>

    <div class="row" id="article2">
    	<div class="span3">
            <?php echo kirbytext($page->article2_title()) ?>
    	</div>
    	<div class="span9">
            <?php echo kirbytext($page->article2_text()) ?>
    	</div>
    </div>                
       
    <!-- <div class="row" id="article3">
    	<div class="span3">
            <?php echo kirbytext($page->article3_title()) ?>
    	</div>
    	<div class="span9">
            <?php echo kirbytext($page->article3_text()) ?>
    	</div>
    </div>       -->


    <div class="row" id="article4">
        <div class="span3">
            <?php echo kirbytext($page->article4_title()) ?>
        </div>
        <div class="span9">
            <?php echo kirbytext($page->article4_text()) ?>
        </div>
    </div>              
      
                       
               
<?php echo snippet('ending') ?>
            