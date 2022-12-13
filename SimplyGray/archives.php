<?php include __DIR__.'/header.php'; ?>
	<header id="header">
	<h2><?php echo $plxShow->lang('ARCHIVES'); ?></h2>
		<ul class="repertory menu breadcrumb">
			<li><a href="<?php $plxShow->racine() ?>"><?php $plxShow->lang('HOME'); ?></a></li>
			<li><?php echo plxDate::formatDate($plxShow->plxMotor->cible, $plxShow->lang('ARCHIVES').' #month #num_year(4)') ?></li>
		</ul>	
	</header>
<main id="main" >
	<?php if($plxShow->plxMotor->page > 1) {echo '<script> window.onload= function() {document.getElementById("main").scrollIntoView();}</script>'; } #ne fonctionne pas sur certain navigateurs ?>
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