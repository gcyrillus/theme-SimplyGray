<?php include __DIR__.'/header.php'; ?>
						<header id="header">
							<h2>
								<?php $plxShow->staticTitle(); ?>
							</h2>
						</header>
	<main id="main">


					<article class="article static" id="static-page-<?php echo $plxShow->staticId(); ?>">



						<?php $plxShow->staticContent(); ?>

					</article>

	</main>

<?php include __DIR__.'/footer.php'; ?>