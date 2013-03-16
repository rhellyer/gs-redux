<?php echo snippet('beginning') ?>

<div class="row">
	<h1 class="title span12"><?php echo html($page->title()) ?></h1>
</div>
<div class="content row">
	<?php 
		$team  = yaml($page->team())  ;
		$board = yaml($page->board()) ;
	?>
	<div class="article span6 ">
		<h2>Team Members</h2>
		<ul class="about-bios">

			<?php foreach($team as $name=>$details): ?>
			<li>
				<div class="name">
					<?php echo $name ?>
					<?php if ($details['bio']) : ?>
						<div class="biotrigger">
							<a href="#">&rsaquo;</i></a>
						</div>
					<?php endif ?>
				</div>
				<div class="role"><?php echo $details['role'] ?></div>
				<div class="bio"><?php echo kirbytext($details['bio']) ?></div>
			</li>
			<?php endforeach; ?>
		</ul>
		<h2>Supporters</h2>
		<?php echo kirbytext($page->supporters()) ?>

		<h2>Regional Partners</h2>

		<?php echo kirbytext($page->regional_partners()) ?>
		</div>
		<div class="article span5 offset1 maincolumn">
			<h2>Board Members</h2>
			<ul class="about-bios">
				<?php foreach($board as $name=>$details): ?>
			<li>
				<div class="name">
					<?php echo $name ?>
					<?php if ($details['bio']) : ?>
						<div class="biotrigger">
							<a href="#">&rsaquo;</i></a>
						</div>
					<?php endif ?>
				</div>
				<div class="role"><?php echo $details['role'] ?></div>
				<div class="bio"><?php echo kirbytext($details['bio']) ?></div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>

<?php echo snippet('ending') ?>
