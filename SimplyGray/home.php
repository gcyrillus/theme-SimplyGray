<?php include __DIR__.'/header.php'; ?>
	<header id="header">
		<h2><?php $plxShow->mainTitle(); ?></h2>
		<!--<p><?php $plxShow->subTitle(); ?></p>-->
	  
	   <?php 
			$formate = '<div class="infos"> <small>#art_authorinfos --#art_author</small></div>';
			$info = $plxShow->plxMotor->aUsers;
			if (trim($info['001']['infos']) != '') {
				$text = str_replace('#art_authorinfos', $info['001']['infos'], $formate);
				$text = str_replace('#art_author', $info['001']['name'], $text);
				echo $text;
			}
		?>
	</header>
	<main id="main" >
	<?php if($plxShow->plxMotor->page > 1) {echo '<script> window.onload= function() {document.getElementById("main").scrollIntoView();}</script>'; }?>
		<ul id="posts">
	<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
			<li><?php $plxShow->artTitle('link'); ?><time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#short_month #num_year(2)'); ?></time></li>
	<?php endwhile; ?>
		</ul>
	<nav class="pagination text-center">
		<?php $plxShow->pagination(); ?>
	</nav>
	</main>
<?php include __DIR__.'/footer.php'; ?>