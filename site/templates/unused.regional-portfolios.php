<?php echo snippet('beginning') ?>

<div class="row">
	<h1 class="title span12"><?php echo html($page->title()) ?></h1>
</div>
<div class="row">
	<div class="span3">
		<br>
		<?php 
		echo kirbytext($page->article1_image());  ?>
	</div>
	<div class="article span9 ">
		<?php echo kirbytext($page->article1_title()); ?><?php echo kirbytext($page->article1_text()) ?>
	</div>
</div>

<div class="row">
	<div class="span3">
		<br>
		<?php 
		echo kirbytext($page->article2_image());  ?>
	</div>
	<div class="article span9 ">
		<?php echo kirbytext($page->article2_title()); ?><?php echo kirbytext($page->article2_text()) ?>
	</div>
</div>

<div class="row">
	
	<div class="span3">
		<br>
		<?php 
		echo kirbytext($page->article3_image());  ?>
	</div>
	<div class="article span9 ">
		<?php echo kirbytext($page->article3_title()); ?><?php echo kirbytext($page->article3_text()) ?>
	</div>
</div>

<div class="row">
	
	<div class="span3">
		<br>
		<?php 
		echo kirbytext($page->article4_image());  ?>
	</div>
	<div class="article span9 ">
		<?php echo kirbytext($page->article4_title()); ?><?php echo kirbytext($page->article4_text()) ?>
	</div>
</div>

<div class="row">
	
	<div class="span3">
		<br>
		<?php 
		echo kirbytext($page->article5_image());  ?>
	</div>
	<div class="article span9 ">
		<?php echo kirbytext($page->article5_title()); ?><?php echo kirbytext($page->article5_text()) ?>
	</div>
</div>

<div class="row">
	
	<div class="span3">
		<br>
		<?php 
		echo kirbytext($page->article6_image());  ?>
	</div>
	<div class="article span9 ">
		<?php echo kirbytext($page->article6_title()); ?><?php echo kirbytext($page->article6_text()) ?>
	</div>
</div>

<div class="row">
	
	<div class="span3">
		<br>
		<?php 
		echo kirbytext($page->article7_image());  ?>
	</div>
	<div class="article span9 ">
		<?php echo kirbytext($page->article7_title()); ?><?php echo kirbytext($page->article7_text()) ?>
	</div>
</div>

<div class="row">
	
	<div class="span3">
		<br>
		<?php 
		echo kirbytext($page->article8_image());  ?>
	</div>
	<div class="article span9 ">
		<?php echo kirbytext($page->article8_title()); ?><?php echo kirbytext($page->article8_text()) ?>
	</div>
</div>




<?php echo snippet('ending') ?>
            