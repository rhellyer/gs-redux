<?php echo snippet('beginning') ?>

<div class="yourimpact">
	<?php if (!$page->hidetitle()) : ?> 
	<div class="row">
		<div class="span12">
			<h1 class="title"><?php echo $page->title() ?></h1>
		</div>
	</div>
	<?php endif ?>
	<div class="row giveheader">
		<div class="span12"><?php echo kirbytext($page->headerimage()) ?></div>
	</div>
	<div class="content row">
		<div class="span8 offset2">
			<?php echo kirbytext($page->maincolumn1()) ?>
		</div>
	</div>
	<div class="content row">
		<div class="span8 offset2">
			<?php echo kirbytext($page->maincolumn2()); ?>
		</div>
		
	</div>
</div>


<?php echo snippet('ending')  ?>