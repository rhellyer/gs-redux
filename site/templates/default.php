<?php echo snippet('beginning') ?>

<div class="row">
	<div class="annotation">
		<?php echo $page->annotation() ?>
	</div>
</div>

<div class="row">
	<h1 class="title span12"><?php echo html($page->title()) ?></h1>
</div>
<div class="content row">
	 <div class="span1 leftcolumn">
		<?php echo kirbytext($page->leftcolumn()); ?>
	</div> 
	<div class="article span6 maincolumn">
		<div class="intro"><?php echo kirbytext($page->intro()) ?></div>
		<?php echo kirbytext($page->text()) ?>
	</div>
	<div class="article span5  rightcolumn">
		<?php echo kirbytext($page->rightcolumn()) ?>
	</div>
</div>


<?php echo snippet('ending') ?>
            