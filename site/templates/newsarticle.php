
<?php echo snippet('beginning') ?>
	
<div class="row">
	<h1 class="title span12"><?php echo html($page->title()) ?></h1>
</div>
<div class="content row">
	<div class="article span8 maincolumn">
		<?php echo kirbytext($page->text()) ?>
	</div>
	<div class="article span3 offset1 rightcolumn">
		
		<h3>Latest News</h2>
		<ul style="list-style:none; margin:0; padding:0">
			<?php $articles = $page->siblings()->visible()->flip(); 
			foreach ($articles as $article) : ?>

			<li>
				&raquo; <a href="<?php echo $article->url() ?>"><?php echo $article->title() ?></a>
			</li>
			
			<?php endforeach; ?>
		</ul>

		<?php echo kirbytext($page->rightcolumn()) ?>
	
	</div>

</div>


<?php echo snippet('ending') ?>
            