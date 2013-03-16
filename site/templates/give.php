<?php echo snippet('beginning') ?>

<div class="give">
	<div class="row giveheader">
		<div class="span12"><?php echo kirbytext($page->headerimage()) ?></div>
	</div>
	<div class="content row">
		<div class="article span4 offset1">
			<?php echo kirbytext($page->give_today()) ?>
		</div>
		<div class="article span4 offset2">
			<?php echo kirbytext($page->hope_partners()) ?>
		</div>
	</div>
	<div class="content row">
		<div class="span4 offset">
			<?php echo kirbytext($page->matching_gifts()); ?>
		</div>
		<div class="span4 ">
			<?php echo kirbytext($page->other_ways()); ?>
		</div>
		<div class="span4">
			<?php echo kirbytext($page->questions()); ?>
		</div>
	</div>

</div>


<?php echo snippet('ending') ?>