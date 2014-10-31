<?php
/**
 * @package _s
 */
?>

<div class="content narrow">
	<h1>
		<?php the_title(); ?>
	</h1>

		<?php the_content(); ?>
		<div class="tags">
			<h2>This post is tagged with&hellip;</h2>
			<?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
		</div>
</div>
