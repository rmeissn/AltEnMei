<!DOCTYPE html>
<html lang="de">

<head>
	<title>{$title}</title>
	<meta charset = "utf-8"/>
	<link rel = "stylesheet" href="style.css" type = "text/css"/>
	<meta name "viewport" contents = "width=device-width, initial-scale=1.0">
	{include file="carouselHeader.tpl"}
</head>

<body class = "body">
	<header class = "mainHeader">

	{include file="carouselBody.tpl"}
	{include file="navbar.tpl"}
		
	</header>

	<div class = "content">
		<article class = "topContent">
			<header>
				<h2>{$topContent[0].heading}</h2>
			</header>
			<footer>
				<p class = "post-info">{$topContent[0].postInfo}</p>
			</footer>
			<content>
				{$topContent[0].content}
			</content>
		</article>
		{foreach $bottomContent as $content}
		{strip}
		<article class = "bottomContent">
			<header>
				<h2>{$content.heading}</h2>
			</header>
			<footer>
				<p class = "post-info">{$content.postInfo}</p>
			</footer>
			<content>
				{$content.content}
			</content>
		</article>
		{/strip}
		{/foreach}
	</div>

	{include file="sidebar.tpl"}
	{include file="footer.tpl"}

</body>

</html>
