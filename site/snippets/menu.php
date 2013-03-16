
<ul>
	
<?php 

foreach( $pages->visible() as $p): ?>
<li class="depth-1">	
    <a class="<?php 
        echo ($p->isOpen()) ? ' active ' : '' ;
        echo ' menu-' . $p->uid() . ' ' ; ?>" href="<?php echo $p->url() ?>" >
        
    <?php echo html($p->title()) ?>
    
    </a>

    <?php echo snippet('tree-menu', array('subpages' => $p->children())) ?>
</li>
    
<?php endforeach ?>
</ul>
