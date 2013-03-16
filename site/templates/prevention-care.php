<?php echo snippet('beginning') ?>
        	<h1 class="title"><?php echo html($page->title()) ?></h1>

	<div class="row" id="intro">
    <!-- 	<div class="span3" >
            <?php echo kirbytext($page->text_title()) ?>
    	</div> -->
    	<div class="span12 ">
            <?php echo kirbytext($page->text()) ?>
    	</div>
    </div>
    <div class="row">
        <div class="span12 bannerlinks">
            <?php echo kirbytext($page->bannerlinks()) ?>
        </div>

    </div>
 <!--    <div class="row">
        <div class="article offset3 span9">
            <?php echo kirbytext($page->text()) ?>
        </div>
    </div> -->

	<div class="row" id="pmtct">
    	<div class="span3" >
            <?php echo kirbytext($page->article1_title()) ?>
    	</div>
    	<div class="span9">
            <?php echo kirbytext($page->article1_text()) ?>
    	</div>
    </div>

    <div class="row" id="prh">
    	<div class="span3">
            <?php echo kirbytext($page->article2_title()) ?>
    	</div>
    	<div class="span9">
            <?php echo kirbytext($page->article2_text()) ?>
    	</div>
    </div>                
       
    <div class="row" id="abc">
    	<div class="span3">
            <?php echo kirbytext($page->article3_title()) ?>
    	</div>
    	<div class="span9">
            <?php echo kirbytext($page->article3_text()) ?>
    	</div>
    </div>                
      
          <div class="row" id="ped">
    	<div class="span3">
            <?php echo kirbytext($page->article4_title()) ?>
    	</div>
    	<div class="span9">
            <?php echo kirbytext($page->article4_text()) ?>
    	</div>
    </div>  

              <div class="row" id="rehab">
    	<div class="span3">
            <?php echo kirbytext($page->article5_title()) ?>
    	</div>
    	<div class="span9">
            <?php echo kirbytext($page->article5_text()) ?>
    	</div>
    </div>               
               
<?php echo snippet('ending') ?>
            