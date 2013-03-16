<div class="nav breadcrumb">
  
    <?php 
    foreach($site->breadcrumb() AS $crumb): ?>
    
        <a<?php echo ($crumb->isActive()) ? ' class="active"' : '' ?> href="<?php echo $crumb->url() ?>"><?php echo $crumb->title() ?> &rsaquo;</a>
    
    <?php endforeach ?>
 
</div>