<?php echo snippet('beginning') ?>

<div class="aboutus">
	<div class="row">
		<div class="span12">
			<h1 class="title"><?php echo $page->title() ?></h1>
		</div>
	</div>

	<div class="row ">
		<div class="span12"><?php echo kirbytext($page->headerimage()) ?></div>
	</div>
	<div class=" row">
		<div class="span8 offset2">
			<?php echo kirbytext($page->missiontitle()) ?>
			<?php echo kirbytext($page->missiontext()) ?>
		</div>
	</div>
	<div class=" row">
		<div class="span8 offset2">
			<?php echo kirbytext($page->modeltitle()); ?>
			<?php echo kirbytext($page->modeltext()); ?>
		</div>
	</div>	
	<div class=" row">
		<div class="span8 offset2">
			<?php echo kirbytext($page->howweworktitle()); ?>
			<?php echo kirbytext($page->howweworktext()); ?>
		</div>
	</div>	
	<div class=" row">
		<div class="span8 offset2">
			<?php echo kirbytext($page->whowearetitle()); ?>
			<?php echo kirbytext($page->whowearetext()); ?>
		</div>
	</div>
</div>


<?php echo snippet('ending') ?>