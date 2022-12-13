<?php if (!defined('PLX_ROOT')) exit; ?>

	<footer id="footer">

				<?php if($plxShow->mode() !='home') include('sidebar.php'); ?>
				 <b>&copy; 2018 - <?php echo date('Y'); ?></b> <?php $plxShow->mainTitle('link'); ?>  <span class="2col"><?php $plxShow->subTitle(); ?></span>  

				<span class="fullwidth center"><?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="<?= PLX_URL_REPO?>" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
				<?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?>&nbsp;
				<?php $plxShow->httpEncoding() ?></span>
				<a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
			
				<?php  if($plxShow->plxMotor->aConf['enable_rss']) { ?>
				<a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>"><?php $plxShow->lang('ARTICLES'); ?></a>
				<?php } ?>
                <?php if($plxShow->plxMotor->aConf['enable_rss_comment']) { ?>
                    <a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?php $plxShow->lang('COMMENTS'); ?></a>
                <?php  } ?>
				<a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>">&#9650;</a>

	</footer>
	
</body>

</html>
