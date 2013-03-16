<?php 
if(!isset($subpages)) $subpages = $site->pages() ;
?>

<ul>
   <?php  // foreach($subpages->visible() AS $p): ?> 
    <?php foreach($subpages AS $p): ?> 
    <li>
        <a  href="<?php echo $p->url() ?>" <?php if (!$p->isVisible()) : ?> style="font-style:italic" <?php endif; ?>><?php echo $p->title() ?></a> 
        <?php echo $p->template() ?>
        <?php 
            if($p->hasChildren()) {
            snippet('tree-menu-debug', array('subpages' => $p->children())) ;
            }
        ?>
    </li>
    <?php endforeach ?>
</ul>