<?php echo snippet('beginning') ?>

<!-- title -->
<h1 class="title"><?php echo html($page->title()) ?></h1>

<div class="content row">
	<div class="span8 articles">
		<!-- Mission statement  -->
		<div class="row mission">
			<div class="span2">
				<h2><?php echo kirbytext($page->missiontitle()); ?></h2>
			</div>
			<div class="span6">
				<?php echo kirbytext($page->missiontext()); ?>
			</div>
		</div>
		<!-- what we do  -->
		<div class="row model">
			<div class="span2">
				<h2><?php echo kirbytext($page->modeltitle()); ?></h2>
			</div>
			<div class="span6">
				<?php echo kirbytext($page->modeltext()); ?>
			</div>
		</div>

		<!-- how we work  -->
		<div class="row">
			<div class="span2">
				<h2><?php echo kirbytext($page->howweworktitle()); ?></h2>
			</div>
			<div class="span6">
				<?php echo kirbytext($page->howwework()); ?>
			</div>
		</div>

		<!-- who we are -->
		<div class="row">
			<div class="span2">
				<h2><?php echo kirbytext($page->whowearetitle()); ?></h2>
			</div>
			<div class="span6">
				<?php echo kirbytext($page->whoweare()); ?>
			</div>
		</div>

		<!-- early years  
		<div class="row">
			<div class="span2">
				<h2><?php echo kirbytext($page->earlyyearstitle()); ?></h2>
			</div>
			<div class="span6">
				<?php echo kirbytext($page->earlyyearstext()); ?>
			</div>
		</div>-->

		<!-- today  -->
		<div class="row">
			<div class="span2">
				<h2><?php echo kirbytext($page->todaytitle()); ?></h2>
			</div>
			<div class="span6">
				<?php echo kirbytext($page->todaytext()); ?>
			</div>
		</div>
	</div>

	<!-- sidebar   -->
	<div class="span4">
		<div class="sidebar"><?php echo kirbytext($page->sidebar()); ?></div>
	</div>
</div>

<?php echo snippet('ending') ?>
