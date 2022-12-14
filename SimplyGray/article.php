<?php include __DIR__.'/header.php'; ?>
	<header id="header">
	  <h2><?php $plxShow->artTitle(); ?></h2>  

			<small>
				<span class="written-by">
					<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?>
				</span>
				|
				<span class="classified-in">
					<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(' ') ?>
				</span>	
			</small>

	</header>
	<main id="main">
		<article class="article" id="post-<?php echo $plxShow->artId(); ?>">
			<p class="art-date ovfwhid">
				<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>">
					<?php $plxShow->artDate('#num_day #month #num_year(4)'); ?>
				</time>
			</p>						

			<?php $plxShow->artThumbnail(); ?>
			<?php $plxShow->artContent(); ?>
			<div class="btop ovfwhid">
				<p><small><span class="tags">
						<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags() ?>
					</span>
				</small></p>
				<p><small>
					<span class="art-nb-com">
						<a href="#comments" title="<?php $plxShow->artNbCom(); ?>"><?php $plxShow->artNbCom(); ?></a> 
					</span>
				</small></p>
			</div>
		</article>

					<?php include __DIR__.'/commentaires.php'; ?>
	</main>
<?php include __DIR__.'/footer.php'; ?>