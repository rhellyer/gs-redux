<?php echo snippet('beginning') ?>
   <h1 class="title"><?php echo html($page->title()) ?></h1>

    <div class="content row">
        <div class="span12">
            <?php echo kirbytext($page->text()) ?>
        </div>
        <div class="span12">
        	<div class="row">
        		<div class="span4"><?php echo kirbytext($page->link1()) ?> </div>
        		<div class="span4"><?php echo kirbytext($page->link2()) ?></div>
        	
        		<div class="span4"><?php echo kirbytext($page->link3()) ?></div>
        		<!-- <div class="span4"><?php echo kirbytext($page->link4()) ?></div> -->
        	</div>
        </div>
        <div class="span12">
            <?php echo kirbytext($page->wherewework()) ?>
        </div>
    </div>
                
                
<?php echo snippet('ending') ?>