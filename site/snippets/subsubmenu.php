<?php 

// find the open/active page on the first level
$open   = $pages->findOpen();

// find the visible children of this page
$items  = ($open) ? $open->children()->visible() : false; 

$opensubpage = false;
// find an open page
if ($items && $items->count()) {
  foreach($items as $item) {
    if ($item->isOpen()) {
        $opensubpage = $item;
        break;
    }
  }
}


$items = ($opensubpage) ? $opensubpage->children()->visible() : false; 
?>
<?php if($items && $items->count()): ?>
<div class="nav subsubmenu">
 <span class="menuid"><?php echo $opensubpage->title(); ?></span>
    <?php foreach($items as $item): ?>
    <a<?php echo ($item->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a>
    <?php endforeach ?>            
 
</div>
<?php endif ?>


