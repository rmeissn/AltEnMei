<!DOCTYPE html>
<div class="carousel-container">
	<div id="carousel">
		{foreach $carouselContent as $content}
		{strip}
		<div class="carousel-feature">
			<a href="#"><img class="carousel-image" alt="Image Caption" src={$content.source}></a>
			<div class="carousel-caption">
				<p>{$content.text}</p>
			</div>
		</div>
		{/strip}
		{/foreach}
	</div>
</div>
