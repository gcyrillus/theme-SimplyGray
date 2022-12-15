<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
	<meta charset="<?php $plxShow->charset('min'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
	<title><?php $plxShow->pageTitle(); ?></title>
<?php
	$plxShow->meta('description');
	$plxShow->meta('keywords');
	$plxShow->meta('author');
?>
	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/theme.css?v=15-12-2022" media="screen"/>
<?php
	$plxShow->templateCss();
	$plxShow->pluginsCss();
?>
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlPostsRssFeed($plxShow->plxMotor->mode) ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
</head>

<body  class="page mode-<?php $plxShow->mode(true) ?>">
	
	<a href="#main" title="Content">Skip</a>
	<h1><a href="<?php echo $plxShow->plxMotor->urlRewrite() ;?>" class="home"><img src="<?php $plxShow->template(); ?>/img/logo.png" alt="<?php $plxShow->mainTitle(); ?>" id="top"></a></h1>
	<nav id="nav"><ul><?php $plxShow->staticList('','<li><a href="#static_url"  class="#static_class #static_status" id="#static_id" title="#static_name">#static_name</a></li> '); ?>
	</ul></nav>
	<aside id="reseaux"><!-- liens réseaux -->
		<a href="https://twitter.com/pluxml">TWITTER</a> <a href="">FORUM</a> <a href="https://ressources.pluxml.org/">RESSOURCES</a> 
	</aside>