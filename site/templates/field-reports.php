<?php echo snippet('beginning') ?>

<div class="row">
	<h1 class="title span12"><?php echo html($page->title()) ?></h1>
</div>
<div class="content row field-reports">

	
	<div class="row">
		<div class="span9">
			<h2 class="span12">Liberia </h2>
			<p class="byline span12">March 2013</p>
		</div>
		
	</div>

	<div class="span12">
		<p style="font-style:italic">In a unique public/private partnership, Global Strategies has teamed up with <br>leading technology 
			company <a href="http://www.metrodigi.com/">Metrodigi</a> to improve the care of neonates.  <br>Below are photos from our recent field test in Liberia<br><span style="font-size:12px">(click photos to view gallery)</span>
		</p>
	</div>


	<?php foreach($page->images() as $image): ?>
	<div class="article span6 clearfix">
		<div class="image">
			<a href="<?php echo $image->url() ?>" class="fancybox" rel="gallery1" title="<?php echo $image->title() ?>"><?php echo thumb($image, array('width' => 130, 'crop' => true)) ?></a></div>
			<div class="caption"><?php echo $image->caption() ?></div>
		</div>

	<?php endforeach ?>

</div>




<?php echo snippet('ending') ?>
