
<?php echo snippet('beginning') ?>

<div class="row">
	<h1 class="title span12"><?php echo html($page->title()) ?></h1>
</div>
<div class="content row">
	<div class="article span8 maincolumn">
		<?php echo kirbytext($page->text()) ?>
	</div>
	<div class="article span3 offset1 rightcolumn">
		<?php echo kirbytext($page->rightcolumn()) ?>
	</div>
</div>


<?php echo snippet('ending') ?>
            