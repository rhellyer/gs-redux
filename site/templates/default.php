<?php echo snippet('beginning') ?>

<?php if (!$page->hidetitle()) : ?> 
	<div class="row">
		<div class="span12">
			<h1 class="title"><?php echo $page->title() ?></h1>
		</div>
	</div>
	<?php endif ?>
<div class="content row">
	 <div class="span1 leftcolumn">
		<?php echo kirbytext($page->leftcolumn()); ?>
	</div> 
	<div class="article span6 maincolumn">
		<div class="intro">
			<?php echo kirbytext($page->intro()) ?></div>
			<?php echo kirbytext($page->text()) ?>
	</div>
	<div class="article span5  rightcolumn">
		<?php echo kirbytext($page->rightcolumn()) ?>
	</div>
</div>


<?php echo snippet('ending') ?>
            