<?php
	require_once('sitemap.class.php');
  	$sitemap = new sitemap(include("sitemap.config.php"));
	echo $sitemap->GenerateSitemap();
?>
