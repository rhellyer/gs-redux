<?php 

// find the open/active page on the first level
$open  = $pages->findOpen();
$items = ($open) ? $open->children()->visible() : false; 

?>

    
<?php 
if($items && $items->count()): ?>
		<a style="text-transform:uppercase;" 
		class="<?php 
            echo ($open->isOpen()) ? ' active ' : '' ;
            echo ' submenu-' . $open->uid() . ' '; ?>" href="<?php echo $open->url() ?>">
            <?php echo html($open->title()) ?>
        </a>
    <ul style="margin:0;padding:0;list-style:none; border-left:1px dotted #ccc;">
    <?php foreach($items as $item): ?>
       	<li style="margin-left:8px;">
        <a class="<?php 
            echo ($item->isOpen()) ? ' active ' : '' ;
            echo ' submenu-' . $open->uid() . ' '; ?>" href="<?php echo $item->url() ?>">
            <?php echo  html($item->title()) ?>
        </a>
       	</li>
    <?php endforeach ?>  
       </ul>   
    
<?php endif ?>
    
