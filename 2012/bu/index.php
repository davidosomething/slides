<?php
function get_dirs($path = '.') {
  $dirs = array();
  foreach (new DirectoryIterator($path) as $file) {
    if ($file->isDir() && !$file->isDot()) {
      $dirs[] = $file->getFilename();
    }
  }
  rsort($dirs, SORT_STRING);
  return $dirs;
}
$dirs = get_dirs(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang="en"> <!--<![endif]-->
<head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=1024, user-scalable=no">
  <title>WordPress I</title>
	<link rel="stylesheet" href="/core/deck.core.css">
	<link rel="stylesheet" href="/extensions/goto/deck.goto.css">
	<link rel="stylesheet" href="/extensions/menu/deck.menu.css">
	<link rel="stylesheet" href="/extensions/navigation/deck.navigation.css">
	<link rel="stylesheet" href="/extensions/status/deck.status.css">
	<link rel="stylesheet" href="/extensions/hash/deck.hash.css">
	<link rel="stylesheet" id="style-theme-link" href="/themes/style/swiss.css">
	<link rel="stylesheet" id="transition-theme-link" href="/themes/transition/horizontal-slide.css">
	
	<script src="/modernizr.custom.js"></script>
</head><body class="deck-container">
<!-- == BEGIN SLIDES ======================================================= -->

<section class="slide">
  <h2>Decks</h2>
  <ul>
    <?php foreach ($dirs as $dir): ?>
      <li><a href="<?php echo $dir; ?>"><?php echo $dir; ?></a>
    <?php endforeach; ?>
  </ul>
</section>

<!-- == DON'T TOUCH ======================================================== -->
<a href="#" class="deck-prev-link" title="Previous">&#8592;</a>
<a href="#" class="deck-next-link" title="Next">&#8594;</a>
<p class="deck-status"><span class="deck-status-current"></span>	/	<span class="deck-status-total"></span></p>
<form action="." method="get" class="goto-form">
	<label for="goto-slide">Go to slide:</label>
	<input type="text" name="slidenum" id="goto-slide" list="goto-datalist">
	<datalist id="goto-datalist"></datalist>
	<input type="submit" value="Go">
</form>
<a href="." title="Permalink to this slide" class="deck-permalink">#</a>
<script src="/jquery-1.7.min.js"></script>
<script src="/core/deck.core.js"></script>
<script src="/extensions/hash/deck.hash.js"></script>
<script src="/extensions/goto/deck.goto.js"></script>
<script src="/extensions/menu/deck.menu.js"></script>
<script src="/extensions/status/deck.status.js"></script>
<script src="/extensions/navigation/deck.navigation.js"></script>
<script>$(function() { $.deck('.slide'); });</script>
</body></html>
