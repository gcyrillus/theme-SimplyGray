<?php include __DIR__.'/header.php'; ?>
<header id="header">
	<h2><?php $plxShow->mainTitle(); ?></h2>
    <!--<p><?php $plxShow->subTitle(); ?></p>-->
  
   <?php // on prend les infos de l'administrateur du site
		$formate = '<div class="infos"> <small>	&ndash;<cite>#art_author</cite>: #art_authorinfos </small></div>';
        $info = $plxShow->plxMotor->aUsers;
        if (trim($info['001']['infos']) != '') {
            $text = str_replace('#art_authorinfos', $info['001']['infos'], $formate);
            $text = str_replace('#art_author', $info['001']['name'], $text);
            echo $text;
        }
	?>
</header>
<main id="main" >
	<?php if($plxShow->plxMotor->page > 1) {echo '<script> window.onload= function() {document.getElementById("main").scrollIntoView();}</script>'; } #ne fonctionne pas sur certain navigateurs ?>
		<ul id="posts">
	<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
				<li><?php
			// recuperation contenu pour l'afficher dans la balise title du lien
		$dataTitle = $plxShow->plxMotor->plxRecord_arts->f('content');
	if($dataTitle =='') $dataTitle = $plxShow->plxMotor->plxRecord_arts->f('chapo');	
		$id = intval($plxShow->plxMotor->plxRecord_arts->f('numero'));
        $title = plxUtils::strCheck($plxShow->plxMotor->plxRecord_arts->f('title'));
        $url = $plxShow->plxMotor->plxRecord_arts->f('url');
        # On affiche lien
        echo '<a href="' . $plxShow->plxMotor->urlRewrite('?article' . $id . '/' . $url) . '" title="' . substr(strip_tags($dataTitle),0,100) . '...">' . $title . '</a>';	
	?><time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#short_month #num_year(2)'); ?></time></li>
	<?php endwhile; ?>
		</ul>
	<nav class="pagination text-center">
		<?php $plxShow->pagination(); ?>
	</nav>
	</main>
<?php include __DIR__.'/footer.php'; ?>
