<?php echo snippet('beginning') ?>

<div class="<?php echo $page->pageclass ?>">
	<div class="row">
		<h1 class="title span12"><?php echo html($page->title()) ?></h1>
	</div>
	<div class="content row">
		 
		<div class="article span4 maincolumn1">
			<?php echo kirbytext($page->maincolumn1()) ?>
		</div>
		<div class="article span4  maincolumn2">
			<?php echo kirbytext($page->maincolumn2()) ?>
		</div>
		<div class="article span4  maincolumn3">
			<?php echo kirbytext($page->maincolumn3()) ?>
		</div>
	
	</div>
</div>


<?php echo snippet('ending') ?>