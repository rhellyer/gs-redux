<?php 
// var_dump($subpages);  echo "foo";
if(!isset($subpages)) $subpages = $site->pages() ;
?>

<ul>
  <?php foreach($subpages->visible() AS $p): 
  
        $class = 
        (($p->isActive()) ? 'active ' : '') .
        (($p->isOpen()) ? 'open ' : '') .
        ('depth-'.$p->depth());
  
  ?>
  <li class="<?php echo $class ?>">
    <a  href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
    <?php if($p->hasChildren()): ?>
    <?php snippet('tree-menu', array('subpages' => $p->children())) ?>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>