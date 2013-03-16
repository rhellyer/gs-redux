<?php echo snippet('beginning') ?>

<div class="row">
	<h1 class="title span12"><?php echo html($page->title()) ?></h1>
</div>
<div class="content row">
	 <div class="span1 leftcolumn">
		<?php echo kirbytext($page->leftcolumn()); ?>
	</div> 
	<div class="article span5 maincolumn1">
		<?php echo kirbytext($page->maincolumn1()) ?>
	</div>
	<div class="article span5  maincolumn2">
		<?php echo kirbytext($page->maincolumn2()) ?>
	</div>

	<div class="span1 rightcolumn">
		<?php echo kirbytext($page->rightcolumn()); ?>
	</div>
</div>


<?php echo snippet('ending') ?>