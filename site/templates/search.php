<?php echo snippet('beginning') ?>

<?php 
 
	$search = new search(
		array(
	 	 'searchfield' => 'q',
	  	 'ignore'      => array('search', 'error', 'sitemap', 'test', 'todo'),
	  	 'words'       => true
	   // , 'paginate'    => 10 
	  	)
	);
	 
	$results = $search->results();
      
?>
 
<div class="search">
	<h1><?php echo html($page->title()) ?></h1>
	 
	<form action="<?php echo thisURL() ?>">
	  <input type="text" placeholder="Type in your searchword…" name="q" value="<?php echo html($search->query()) ?>" />
	  <input type="submit" value="Search" />
	</form>
	 
	<?php if($results): ?>
	
	<p>Search results for <strong><?php echo html($search->query()) ?></strong></p>
	 
	<ul>
	  <?php foreach($results as $row): ?>
	  <li>
	    <strong><a href="<?php echo $row->url() ?>"><?php echo html($row->title()) ?></a></strong>
	    
	    <a href="<?php echo $row->url() ?>"><?php echo html($row->url()) ?></a>
	    <div><?php echo str::excerpt($row->metadescription(), 100) ?></div>
	  </li>
	  <?php endforeach ?>
	</ul>
	 
	
	<?php elseif($search->query()): ?>
	<div class="no-results">No results for <strong><?php echo html($search->query()) ?></strong></div>
	<?php endif ?></div>

<?php echo snippet('ending') ?>
