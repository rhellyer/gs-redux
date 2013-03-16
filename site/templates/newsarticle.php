
<?php echo snippet('beginning') ?>

<div class="row">
	<h1 class="title span12"><?php echo html($page->title()) ?></h1>
</div>
<div class="content row">
	<div class="span12 annotation">
		<?php echo kirbytext($page->annotation()); ?>
	</div>
	<div class="span2 leftcolumn">
		<?php echo kirbytext($page->leftcolumn()); ?>
	</div>
	<div class="article span7 maincolumn">
		<?php echo kirbytext($page->text()) ?>
	</div>
	<div class="article span2 offset1 rightcolumn">
		<?php echo kirbytext($page->rightcolumn()) ?>
	</div>
</div>


<?php echo snippet('ending') ?>
            