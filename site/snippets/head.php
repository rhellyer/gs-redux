<title><?php echo html($site->title()) ?>-<?php echo html($page->title()) ?></title>
<meta charset="utf-8" />
<meta name="description" content="<?php echo html($site->description()) ?>" />
<meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
<meta name="robots" content="index, follow" />

<?php echo css('assets/styles/reset-typography.css') ?>
<?php echo css('assets/styles/navigation.css') ?>
<?php echo css('assets/styles/styles.css') ?>
<?php echo css('assets/styles/grid.css') ?>
<?php echo css('assets/fancybox/source/jquery.fancybox.css') ?>

<?php echo js('http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js') ?>
<?php echo js('assets/fancybox/source/jquery.fancybox.pack.js') ?>
<?php echo js('assets/masonry/masonry.js') ?>
<?php echo js('assets/js/script.js') ?>

 <!-- Typekit and font awesome icons -->
<?php echo css('assets/styles/font-awesome.min.css') ?>
<script type="text/javascript" src="//use.typekit.net/mmu4edu.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>


